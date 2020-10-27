<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class ClientGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'org_client_groups';

    protected $with = ['company'];

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

    public function clients()
    {
        return $this->hasMany(Client::class, 'group_id', 'group_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'company_id', 'company_id');
    }



}
