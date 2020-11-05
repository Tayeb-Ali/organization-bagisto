<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;


class Store extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_stores';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'store_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [

        'company_id', 'company_branch_id', 'group_id', 'description', 'store_keeper', 'status', 'amend_by',
        'amend_date', 'last_trns_date', 'last_trns_value', 'last_trns_type', 'cost_center_code', 'have_sub_stores',
        'store_contacts', 'store_location', 'sub_store_mandatory', 'account_code', 'dept_code',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required',
        'group_id' => 'required',
        'company_id' => 'required',
        'status' => 'required',
    ];

    public function branch()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_branch_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }

    public function group()
    {
        return $this->hasOne(Group::class, 'group_id', 'group_id');
    }

}
