<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNote extends Model
{
    protected $table="user_notes";
    // protected $fallible=[];
    public function User(){
        return $this->hasMany(User::class);
    }
}
