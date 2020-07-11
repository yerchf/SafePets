<?php

namespace SAFEPETS;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        return $this
        ->belongsToMany('SAFEPETS\User','role_user','user_id','role_id')
        ->whitTimestamps();
    }

}
