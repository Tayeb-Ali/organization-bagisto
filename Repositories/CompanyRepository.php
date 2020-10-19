<?php

namespace DOCore\Organization\Repositories;

use DOCore\Organization\Models\Company;
use Webkul\Core\Eloquent\Repository;
use Illuminate\Http\Request;


class CompanyRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Company::class;
    }

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = $request->get('perPage') ? $request->get('perPage') : 25;

        if (!empty($keyword)) {
            return Company::where('description', 'LIKE', "%$keyword%")
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
            return $company = Company::latest()->paginate($perPage);
        }
    }

    public function create(array $data)
    {

    }
}