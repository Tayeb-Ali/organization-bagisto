<?php

namespace DOCore\Organization\Models;

use Illuminate\Database\Eloquent\Model;

class EmployGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employ_groups';


    protected $with = ['employ'];

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
    protected $fillable = ['group_id', 'group_desc', 'account_code', 'status', 'amend_by', 'amend_date'];

    public function employ()
    {
        return $this->hasMany(Employ::class, 'group_id', 'group_id');
    }


}