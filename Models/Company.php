<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'company_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'currency', 'status', 'has_sub_company', 'company_parent_id', 'gl_ac_levels', 'gl_ac_level_1_len', 'gl_ac_level_2_len', 'gl_ac_level_3_len', 'gl_ac_level_4_len', 'gl_ac_level_5_len', 'gl_ac_level_6_len', 'gl_ac_level_7_len', 'gl_ac_level_8_len', 'gl_ac_level_9_len', 'gl_ac_level_0_len', 'gl_cc_levels', 'gl_cc_level_0_len', 'gl_cc_level_1_len', 'gl_cc_level_2_len', 'gl_cc_level_3_len', 'gl_cc_level_4_len', 'gl_cc_level_5_len', 'gl_cc_level_6_len', 'gl_cc_level_7_len', 'gl_cc_level_8_len', 'gl_cc_level_9_len', 'gl_cc_level_10_len', 'cust_code_len', 'supp_code_len', 'bank_code_len', 'trea_code_len', 'stor_code_len', 'srep_code_len', 'expe_code_len', 'amend_by', 'amend_date', 'web', 'asset_code_len', 'locat_code_len', 'product_code_len', 'product_batch_len', 'users_code_len', 'sub_cust_code_len', 'sub_store_code_len', 'curr_fin_year', 'company_type', 'local_partner_percent', 'zakah_tax_formula', 'cust_code_type', 'supp_code_type', 'bank_code_type', 'trea_code_type', 'stor_code_type', 'srep_code_type', 'expe_code_type', 'asset_code_type', 'locat_code_type', 'product_code_type', 'product_batch_type', 'users_code_type', 'sub_cust_code_type', 'sub_store_code_type', 'short_desc'];

    public function branches()
    {
        return $this->hasMany(CompanyBranch::class, 'company_id', 'company_id');
    }


    
}
