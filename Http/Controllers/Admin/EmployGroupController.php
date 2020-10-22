<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\EmployGroup;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Webkul\User\Models\Admin;

class EmployGroupController extends Controller
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
            $employGroup = EmployGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employGroup = EmployGroup::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('employGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $employGroup = new EmployGroup;

        $employGroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact(['employGroup', 'company']));
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

        EmployGroup::create($requestData);

        session()->flash('success', trans('organization::app.employ-group.add-success', ['name' => 'EmployGroup']));

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
        $employGroup = EmployGroup::findOrFail($id);

        return view($this->_config['view'], compact('employGroup'));
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
        $employGroup = EmployGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('employGroup', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        $employGroup = EmployGroup::findOrFail($id);
        $employGroup->update($requestData);

        session()->flash('success', trans('organization::app.employ-group.update-success', ['name' => 'EmployGroup']));

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
        $employGroup = EmployGroup::findOrFail($id);

        if (Employ::where('group_id', $id)->get()->count()) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($employGroup->delete()) {
            session()->flash('success', trans('organization::app.employ-group.delete-success', ['name' => 'EmployGroup']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.employ-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
