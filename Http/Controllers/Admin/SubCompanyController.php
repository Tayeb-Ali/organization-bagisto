<?php

namespace DOCore\Organization\Http\Controllers\Admin;

use DOCore\Organization\Http\Controllers\Admin\Controller;
use DOCore\Organization\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Webkul\User\Models\Admin;

class SubCompanyController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return View
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $companys = Company::where('has_sub_company', 0)
            ->where('status', 1)
            ->get(['company_id', 'description']);

        return view($this->_config['view'], compact(['company', 'companys']));
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
        $input = $request->all();
        $input['status'] = 2;

        $company = Company::findOrFail($id);
        $company->update($input);

        session()->flash('success', trans('organization::app.company.update-success', ['name' => 'Company']));

        return redirect()->route($this->_config['redirect']);
    }


}
