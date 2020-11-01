<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Store;
use DOCore\Organization\Models\StoreGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class StoreGroupController extends Controller
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
            $storeGroup = StoreGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $storeGroup = StoreGroup::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('storeGroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $storeGroup = new StoreGroup;

        $storeGroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact('storeGroup', 'company'));
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
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        StoreGroup::create($requestData);

        session()->flash('success', trans('organization::app.store-group.add-success', ['name' => 'StoreGroup']));

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
        $storeGroup = StoreGroup::findOrFail($id);

        return view($this->_config['view'], compact('storeGroup'));
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
        $storeGroup = StoreGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');


        return view($this->_config['view'], compact('storeGroup', 'company'));
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

        $storeGroup = StoreGroup::findOrFail($id);
        $storeGroup->update($requestData);

        session()->flash('success', trans('organization::app.store-group.update-success', ['name' => 'StoreGroup']));

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
        $storeGroup = StoreGroup::findOrFail($id);

        if (Store::where('group_id', $id)->get()->count()) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($storeGroup->delete()) {
            session()->flash('success', trans('organization::app.store-group.delete-success', ['name' => 'StoreGroup']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.store-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
