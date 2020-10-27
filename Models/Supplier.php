<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_suppliers';
    protected $with = ['company', 'group'];

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'client_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'group_id', 'supp_type', 'name', 'contact_person', 'phone', 'fax', 'pobox', 'email', 'country', 'city', 'address', 'have_branch', 'status', 'credit_limit', 'begin_bal_credit', 'begin_bal_debit', 'curr_bal_credit', 'curr_bal_debit', 'amend_by', 'amend_date', 'account_code', 'last_trns_date', 'last_trns_value', 'last_trns_type', 'currency_code', 'zip_code', 'begin_bal_credit_fc', 'begin_bal_debit_fc', 'curr_bal_credit_fc', 'curr_bal_debit_fc', 'allowance_days', 'analysis_code', 'active_flag', 'vat_flag', 'mship_to_address', 'mship_to_phone', 'mship_to_fax', 'mship_to_city', 'mship_to_pobox', 'billing_contact_person'];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'company_id' => 'required',
        'group_id' => 'required'
    ];


    public function group()
    {
        return $this->belongsTo(SupplierGroup::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }


}
