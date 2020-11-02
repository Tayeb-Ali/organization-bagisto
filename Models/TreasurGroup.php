<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class TreasurGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_treasurs_groups';

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
    protected $fillable = ['group_id', 'company_id', 'group_desc', 'account_code', 'status', 'amend_by', 'amend_date'];

    public function treasurs()
    {
        return $this->hasMany(Treasur::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }


}
