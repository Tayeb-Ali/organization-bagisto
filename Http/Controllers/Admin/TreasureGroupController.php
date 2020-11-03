<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Bank;
use DOCore\Organization\Models\TreasureGroup;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class TreasureGroupController extends Controller
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
            $treasureGroup = TreasureGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->with('company')->paginate($perPage);
        } else {
             $treasureGroup = TreasureGroup::latest()->with('company')->paginate($perPage);
        }

        return view($this->_config['view'], compact('treasureGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $treasureGroup = new TreasureGroup;

        $treasureGroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact('treasureGroup', 'company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse|Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        TreasureGroup::create($requestData);

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
        $treasureGroup = TreasureGroup::findOrFail($id);

        return view($this->_config['view'], compact('treasureGroup'));
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
        $treasureGroup = TreasureGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('treasureGroup', 'company'));
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

        $treasureGroup = TreasureGroup::findOrFail($id);
        $treasureGroup->update($requestData);

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
        $treasureGroup = TreasureGroup::findOrFail($id);

        if (Bank::where('group_id', $id)->get()->count()) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($treasureGroup->delete()) {
            session()->flash('success', trans('organization::app.thearsur-group.delete-success', ['name' => 'TreasurGroup']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.thearsur-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
