<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relasi antara users dengan roles
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
