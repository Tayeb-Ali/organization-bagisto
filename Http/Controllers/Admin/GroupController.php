<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DB;
use DOCore\Organization\Models\Bank;
use DOCore\Organization\Models\Client;
use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Group;
use DOCore\Organization\Models\Store;
use DOCore\Organization\Models\Supplier;
use DOCore\Organization\Models\Treasure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class GroupController extends Controller
{
    /**
     * To hold the request variables from route file
     *
     * @var array
     */
    protected $_config;

    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            $group = Group::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $group = Group::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $group = new Group;

        $group->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact('group', 'company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function store(Request $request)
    {
         $request->all();
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        Group::create($requestData);

        session()->flash('success', trans('organization::app.group.add-success', ['name' => 'Group']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return View
     */
    public function show($id)
    {
        $group = Group::findOrFail($id);

        return view($this->_config['view'], compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return View
     */
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('group', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        $group = Group::findOrFail($id);
        $group->update($requestData);

        session()->flash('success', trans('organization::app.group.update-success', ['name' => 'Group']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function delete($id)
    {
        $group = Group::findOrFail($id);
        $check = self::groupRelateChild($id);
        if ($check) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($group->delete()) {
            session()->flash('success', trans('organization::app.group.delete-success', ['name' => 'Group']));
            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.group.delete-failure'));
            return redirect()->route($this->_config['redirect']);
        }
    }

    public function groupRelateChild($id)
    {
        $store = Store::where('group_id', $id)->get('group_id')->count();
        $supplier = Supplier::where('group_id', $id)->get('group_id')->count();
        $employ = Employ::where('group_id', $id)->get('group_id')->count();
        $client = Client::where('group_id', $id)->get('group_id')->count();
        $bank = Bank::where('group_id', $id)->get('group_id')->count();
        $treasure = Treasure::where('group_id', $id)->get('group_id')->count();
        if ($store || $supplier || $employ || $client || $bank || $treasure) {
            return true;
        }
        return false;

    }
}
