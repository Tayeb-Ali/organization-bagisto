<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Controllers\Admin\Controller;
use DOCore\Organization\Models\Company;
use DOCore\Organization\Models\Supplier;
use DOCore\Organization\Models\SupplierGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\User\Models\Admin;

class SupplierGroupController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            $suppliergroup = SupplierGroup::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_desc', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $suppliergroup = SupplierGroup::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('suppliergroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $suppliergroup = new SupplierGroup;

        $suppliergroup->fill($request->old());
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact(['suppliergroup', 'company']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        SupplierGroup::create($requestData);

        session()->flash('success', trans('organization::app.supplier-group.add-success', ['name' => 'SupplierGroup']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $suppliergroup = SupplierGroup::findOrFail($id);

        return view($this->_config['view'], compact('suppliergroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $suppliergroup = SupplierGroup::findOrFail($id);
        $company = Company::all('company_id', 'description');

        return view($this->_config['view'], compact(['suppliergroup', 'company']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'company_id' => 'required',
            'group_desc' => 'required'
        ]);
        $requestData = $request->all();

        $suppliergroup = SupplierGroup::findOrFail($id);
        $suppliergroup->update($requestData);

        session()->flash('success', trans('organization::app.supplier-group.update-success', ['name' => 'SupplierGroup']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $suppliergroup = SupplierGroup::findOrFail($id);
        if (Supplier::where('group_id', $id)->get()->count()) {
            session()->flash('warning', trans('organization::app.delete-error.message1'));
            return redirect()->back();
        } elseif ($suppliergroup->delete()) {
            session()->flash('success', trans('organization::app.supplier-group.delete-success', ['name' => 'SupplierGroup']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.supplier-group.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
