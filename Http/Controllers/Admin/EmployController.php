<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use Auth;
use DOCore\Organization\Http\Requests\EmployRequest;
use DOCore\Organization\Models\CompanyBranch;
use DOCore\Organization\Models\Employ;
use DOCore\Organization\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class EmployController extends Controller
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
            $employ = Employ::where('company_id', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->orWhere('cust_type', 'LIKE', "%$keyword%")
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
                ->orWhere('acc_mgr', 'LIKE', "%$keyword%")
                ->orWhere('account_code', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_date', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_value', 'LIKE', "%$keyword%")
                ->orWhere('last_trns_type', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('begin_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_credit_fc', 'LIKE', "%$keyword%")
                ->orWhere('curr_bal_debit_fc', 'LIKE', "%$keyword%")
                ->orWhere('currency_code', 'LIKE', "%$keyword%")
                ->orWhere('allowance_days', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_address', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_phone', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_fax', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_city', 'LIKE', "%$keyword%")
                ->orWhere('mship_to_pobox', 'LIKE', "%$keyword%")
                ->orWhere('online_cust', 'LIKE', "%$keyword%")
                ->orWhere('analysis_code', 'LIKE', "%$keyword%")
                ->orWhere('sprice_list', 'LIKE', "%$keyword%")
                ->orWhere('vat_flag', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $employ = Employ::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('employ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request)
    {
        $employ = new Employ;

        $employ->fill($request->old());
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Employ')->get(['group_id', 'group_desc']);


        return view($this->_config['view'], compact('company', 'employ', 'group'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function store(EmployRequest $request)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');
        $requestData['amend_by'] = Auth::user()->id;

        Employ::create($requestData);

        session()->flash('success', trans('organization::app.employ.add-success', ['name' => 'Employ']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployRequest $request
     *
     * @return RedirectResponse|Redirector
     */
    public function storeAjax(EmployRequest $request)
    {
        $requestData = $request->all();

        $employ = Employ::create($requestData);
        if ($employ) {
            return response()->json(['employ' => $employ, 'status' => true]);
        } else {
            return response()->json(['employ' => $employ, 'status' => false]);
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
        $employ = Employ::findOrFail($id);

        return view($this->_config['view'], compact('employ'));
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
        $employ = Employ::findOrFail($id);
        $company = CompanyBranch::all('company_id', 'description');
        $group = Group::where('model_name', 'Employ')->get(['group_id', 'group_desc']);

        return view($this->_config['view'], compact('company', 'employ', 'group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmployRequest $request
     * @param int $id
     *
     * @return RedirectResponse|Redirector
     */
    public function update(EmployRequest $request, $id)
    {
        $requestData = $request->all();
        $requestData['company_id'] = session('company_id');
        $requestData['amend_by'] = Auth::user()->id;

        $employ = Employ::findOrFail($id);
        $employ->update($requestData);

        session()->flash('success', trans('organization::app.employ.update-success', ['name' => 'Employ']));

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
        $employ = Employ::findOrFail($id);

        if ($employ->delete()) {
            session()->flash('success', trans('organization::app.employ.delete-success', ['name' => 'Employ']));

            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.employ.delete-failure'));

            return redirect()->route($this->_config['redirect']);
        }
    }
}
