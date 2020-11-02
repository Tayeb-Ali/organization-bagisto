<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class StoreGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_stores_groups';

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
    protected $fillable = ['group_id', 'company_id', 'group_desc', 'status', 'cost_center_code', 'amend_by', 'amend_date'];

    public function stores()
    {
        return $this->hasMany(Store::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }


}
