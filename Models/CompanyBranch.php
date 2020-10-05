<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyBranch extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_branches';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'branch_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'short_desc', 'description', 'branch_country', 'branch_weight', 'branch_manager', 'currency', 'status', 'amend_by', 'amend_date', 'phone', 'fax', 'email', 'cost_center', 'ship_to_address', 'ship_to_phone', 'ship_to_fax', 'ship_to_city', 'ship_to_country', 'bill_to_address', 'bill_to_phone', 'bill_to_fax', 'bill_to_city', 'bill_to_country'];

    public function company()
    {
        return $this->belongsTo('Company', 'company_id', 'company_id');
    }


    
}
