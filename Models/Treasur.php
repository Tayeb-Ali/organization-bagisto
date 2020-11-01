<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;


class Treasur extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'erp_treasurs';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'treasur_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'treasur_id',
        'company_id',
        'group_id',
        'code', 'name', 'casher', 'name_o', 'bank_name', 'currency_code', 'status', 'begin_bal_debit',
        'begin_bal_credit', 'curr_bal_credit', 'curr_bal_debit', 'amend_by', 'amend_date',
        'last_trns_date', 'last_trns_value', 'last_trns_type', 'begin_bal_credit_fc', 'begin_bal_debit_fc',
        'curr_bal_credit_fc', 'curr_bal_debit_fc', 'analysis_code'];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'bank_name' => 'required',
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }

    public function group()
    {
        return $this->hasOne(TreasurGroup::class, 'group_id', 'group_id');
    }
}
