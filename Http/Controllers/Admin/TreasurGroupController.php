<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Bank;
use DOCore\Organization\Models\TreasurGroup;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TreasurGroupController extends Controller
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
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            $treasurGroup = TreasurGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->with('company')->paginate($perPage);
        } else {
             $treasurGroup = TreasurGroup::latest()->with('company')->paginate($perPage);
        }

        return view($this->_config['view'], compact('treasurGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $treasurGroup = new TreasurGroup;

        $treasurGroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact(['treasurGroup', 'company']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        TreasurGroup::create($requestData);

        session()->flash('success', trans('organization::app.thearsur-group.add-success', ['name' => 'TreasurGroup']));

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
        $treasurGroup = TreasurGroup::findOrFail($id);

        return view($this->_config['view'], compact('treasurGroup'));
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
        $treasurGroup = TreasurGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('treasurGroup', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        $treasurGroup = TreasurGroup::findOrFail($id);
        $treasurGroup->update($requestData);

        session()->flash('success', trans('organization::app.thearsur-group.update-success', ['name' => 'TreasurGroup']));

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
        $treasurGroup = TreasurGroup::findOrFail($id);

        if (Bank::where('group_id', $id)->get()->count()) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($treasurGroup->delete()) {
            session()->flash('success', trans('organization::app.thearsur-group.delete-success', ['name' => 'TreasurGroup']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.thearsur-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
