<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;
use DOCore\DOQuot\Models\Dispatch;


class Employ extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_employees';

    protected $with = ['company', 'group'];

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'employee_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'company_id', 'group_id', 'cust_type', 'name', 'contact_person', 'phone', 'fax', 'pobox', 'email', 'country', 'city', 'address', 'have_branch', 'status', 'credit_limit', 'begin_bal_credit', 'begin_bal_debit', 'curr_bal_credit', 'curr_bal_debit', 'amend_by', 'amend_date', 'acc_mgr', 'account_code', 'last_trns_date', 'last_trns_value', 'last_trns_type', 'begin_bal_credit_fc', 'begin_bal_debit_fc', 'curr_bal_credit_fc', 'curr_bal_debit_fc', 'currency_code', 'allowance_days', 'mship_to_address', 'mship_to_phone', 'mship_to_fax', 'mship_to_city', 'mship_to_pobox', 'online_cust', 'analysis_code', 'sprice_list', 'vat_flag'];

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
        return $this->belongsTo(EmployGroup::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function dispatch()
    {
        return $this->hasMany(Dispatch::class, 'company_id', 'company_id');
    }


}
