<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){

        return $this->belongsTo('app/User','role_id');
    }
}
