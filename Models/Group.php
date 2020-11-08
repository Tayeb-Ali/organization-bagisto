<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_groups';

    protected $modelPath;

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'group_id';

    protected $casts = [
        'have_child'=> 'boolean'
    ];
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id', 'company_id', 'model_name', 'account_code', 'cost_center_code', 'group_desc',
        'status', 'cost_center_code', 'amend_by', 'amend_date', 'have_child'
    ];

    public function employ()
    {
        return $this->hasMany(Employ::class, 'group_id', 'group_id');
    }

    public function store()
    {
        return $this->hasMany(Store::class, 'group_id', 'group_id');
    }

    public function client()
    {
        return $this->hasMany(Client::class, 'group_id', 'group_id');
    }

    public function treasure()
    {
        return $this->hasMany(Treasure::class, 'group_id', 'group_id');
    }

    public function supplier()
    {
        return $this->hasMany(Supplier::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }


}
