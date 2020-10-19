<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Controllers\Admin\Controller;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Webkul\User\Models\Admin;

class CompanyController extends Controller
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
            $company = Company::where('description', 'LIKE', "%$keyword%")
                ->orWhere('currency', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_levels', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_1_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_2_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_3_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_4_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_5_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_6_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_7_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_8_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_9_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_ac_level_0_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_levels', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_0_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_1_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_2_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_3_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_4_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_5_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_6_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_7_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_8_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_9_len', 'LIKE', "%$keyword%")
                ->orWhere('gl_cc_level_10_len', 'LIKE', "%$keyword%")
                ->orWhere('cust_code_len', 'LIKE', "%$keyword%")
                ->orWhere('supp_code_len', 'LIKE', "%$keyword%")
                ->orWhere('bank_code_len', 'LIKE', "%$keyword%")
                ->orWhere('trea_code_len', 'LIKE', "%$keyword%")
                ->orWhere('stor_code_len', 'LIKE', "%$keyword%")
                ->orWhere('srep_code_len', 'LIKE', "%$keyword%")
                ->orWhere('expe_code_len', 'LIKE', "%$keyword%")
                ->orWhere('amend_by', 'LIKE', "%$keyword%")
                ->orWhere('amend_date', 'LIKE', "%$keyword%")
                ->orWhere('web', 'LIKE', "%$keyword%")
                ->orWhere('asset_code_len', 'LIKE', "%$keyword%")
                ->orWhere('locat_code_len', 'LIKE', "%$keyword%")
                ->orWhere('product_code_len', 'LIKE', "%$keyword%")
                ->orWhere('product_batch_len', 'LIKE', "%$keyword%")
                ->orWhere('users_code_len', 'LIKE', "%$keyword%")
                ->orWhere('sub_cust_code_len', 'LIKE', "%$keyword%")
                ->orWhere('sub_store_code_len', 'LIKE', "%$keyword%")
                ->orWhere('curr_fin_year', 'LIKE', "%$keyword%")
                ->orWhere('company_type', 'LIKE', "%$keyword%")
                ->orWhere('local_partner_percent', 'LIKE', "%$keyword%")
                ->orWhere('zakah_tax_formula', 'LIKE', "%$keyword%")
                ->orWhere('cust_code_type', 'LIKE', "%$keyword%")
                ->orWhere('supp_code_type', 'LIKE', "%$keyword%")
                ->orWhere('bank_code_type', 'LIKE', "%$keyword%")
                ->orWhere('trea_code_type', 'LIKE', "%$keyword%")
                ->orWhere('stor_code_type', 'LIKE', "%$keyword%")
                ->orWhere('srep_code_type', 'LIKE', "%$keyword%")
                ->orWhere('expe_code_type', 'LIKE', "%$keyword%")
                ->orWhere('asset_code_type', 'LIKE', "%$keyword%")
                ->orWhere('locat_code_type', 'LIKE', "%$keyword%")
                ->orWhere('product_code_type', 'LIKE', "%$keyword%")
                ->orWhere('product_batch_type', 'LIKE', "%$keyword%")
                ->orWhere('users_code_type', 'LIKE', "%$keyword%")
                ->orWhere('sub_cust_code_type', 'LIKE', "%$keyword%")
                ->orWhere('sub_store_code_type', 'LIKE', "%$keyword%")
                ->orWhere('short_desc', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $company = Company::latest()->paginate($perPage);
        }

        return view($this->_config['view'], compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(Request $request)
    {
        $subCompany = Company::where('has_sub_company', 1)->get(['company_id', 'description']);
        $company = new Company;

        $company->fill($request->old());

        return view($this->_config['view'], compact('company', 'subCompany'));
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
            'description' => 'required',
            'gl_ac_levels' => 'required|numeric|min:1|max:9',
            'gl_ac_level_0_len' => 'required|numeric',
            'gl_ac_level_1_len' => 'required|numeric',
            'gl_ac_level_2_len' => 'required_if:gl_ac_levels,2'
        ]);
        $requestData = $request->all();
        if ($request->has_sub_company) {
            if ($request->company_parent_id) {
                session()->flash('warning', trans('organization::app.company.delete-error1', ['name' => 'Company']));
                return redirect()->back();
            }
        }

        Company::create($requestData);

        session()->flash('success', trans('organization::app.company.add-success', ['name' => 'Company']));

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
        $company = Company::findOrFail($id);
        if ($company->has_sub_company) {
            $subCompany = Company::where('company_parent_id', $id)->get();
            return view($this->_config['view'], compact('company', 'subCompany'));
        } else {
            $subCompany = '';
            return view($this->_config['view'], compact('company', 'subCompany'));
        }


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
        $subCompany = Company::where('has_sub_company', 1)->get(['company_id', 'description']);
        $company = Company::findOrFail($id);

        return view($this->_config['view'], compact('company', 'subCompany'));
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
            'description' => 'required',
            'gl_ac_levels' => 'required|numeric|min:1|max:9',
            'gl_ac_level_0_len' => 'required|numeric',
            'gl_ac_level_1_len' => 'required|numeric',
            'gl_ac_level_2_len' => 'required_if:gl_ac_levels,2'
        ]);
        $requestData = $request->all();

        if ($request->has_sub_company) {
            if ($request->company_parent_id) {
                session()->flash('warning', trans('organization::app.company.delete-error1', ['name' => 'Company']));
                return redirect()->back();
            }
        }

        $company = Company::findOrFail($id);
        $company->update($requestData);

        session()->flash('success', trans('organization::app.company.update-success', ['name' => 'Company']));

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
        $company = Company::findOrFail($id);
//         return $company;
        if ($company->company_parent_id) {
            session()->flash('success', trans('organization::app.company.delete-error2', ['name' => 'Company']));
            return redirect()->route($this->_config['redirect']);
        }

        if (!isset($company->has_sub_company)) {
            session()->flash('success', trans('organization::app.company.delete-error3', ['name' => 'Company']));
            return redirect()->route($this->_config['redirect']);
        }
        $companys = Company::where('company_parent_id', $id)->first();
        if (!$companys) {
            $company->delete();
            session()->flash('success', trans('organization::app.company.delete-success', ['name' => 'Company']));
            return redirect()->route($this->_config['redirect']);
        } else {
            session()->flash('warning', trans('organization::app.company.delete-failure'));
            return redirect()->route($this->_config['redirect']);
        }
    }
}
