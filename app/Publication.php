<?php

namespace SAFEPETS;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{

    public function user(){
        return $this->belongsTo('\SAFEPETS\User');
    }  
}
