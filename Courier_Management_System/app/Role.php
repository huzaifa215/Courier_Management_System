<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){

        return $this->belongsTo('App/User','role_id');//tabel connect through the role id calles forign key
    }
}
