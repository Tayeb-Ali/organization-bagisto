<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Requests\SupplierRequest;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Supplier;
use DOCore\Organization\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class SupplierController extends Controller
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
            $supplier = Supplier::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->orWhere('supp_type', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('contact_person', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('fax', 'LIKE', "%$keyword%")
                ->orWhere('pobox', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('city', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('have_branch', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('credit_limit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_value', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_type', 'LIKE', "%$keyword%")
                ->orWhere('currency_code', 'LIKE', "%$keyword%")
                ->orWhere('zip_code', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('allowance_days', 'LIKE', "%$keyword%")
                ->orWhere('analysis_code', 'LIKE', "%$keyword%")
                ->orWhere('active_flag', 'LIKE', "%$keyword%")
                ->orWhere('vat_flag', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_address', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_phone', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_fax', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_city', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_pobox', 'LIKE', "%$keyword%")
                ->orWhere('billing_contact_person', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $supplier = Supplier::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $supplier = new Supplier;

        $supplier->fill($request->old());
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Supplier')->get(['group_id', 'group_desc']);
        return view($this->_config['view'], compact('supplier', 'company', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SupplierRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(SupplierRequest $request)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');
        Supplier::create($requestData);

        session()->flash('success', trans('organization::app.supplier.add-success', ['name' => 'Supplier']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return RedirectResponse|Redirector
     */
    public function storeAjax(Request $request)
    {
        $requestData = $request->all();

        $supplier = Supplier::create($requestData);

        if ($supplier) {
            return response()->json(['supplier' => $supplier, 'status' => true]);
        } else {
            return response()->json(['supplier' => $supplier, 'status' => false]);
        }
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
        $supplier = Supplier::findOrFail($id);

        return view($this->_config['view'], compact('supplier'));
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
        $supplier = Supplier::findOrFail($id);
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Supplier')->get(['group_id', 'group_desc']);

        return view($this->_config['view'], compact('supplier', 'company', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SupplierRequest $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(SupplierRequest $request, $id)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');

        $supplier = Supplier::findOrFail($id);
        $supplier->update($requestData);

        session()->flash('success', trans('organization::app.supplier.update-success', ['name' => 'Supplier']));

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
        $supplier = Supplier::findOrFail($id);

        if ($supplier->delete()) {
            session()->flash('success', trans('organization::app.supplier.delete-success', ['name' => 'Supplier']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.supplier.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
