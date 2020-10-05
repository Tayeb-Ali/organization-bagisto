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
    protected $table = 'client_groups';

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

    public function Clients()
    {
        return $this->hasMany('Client', 'group_id', 'group_id');
    }


    
}
