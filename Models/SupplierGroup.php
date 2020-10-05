<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class SupplierGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supplier_groups';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'group_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['company_id', 'group_desc', 'account_code', 'status', 'amend_by', 'amend_date'];

    public function Suppliers()
    {
        return $this->hasMany('Supplier', 'group_id', 'group_id');
    }


    
}
