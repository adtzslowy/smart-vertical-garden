<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelAuthenticate extends Authenticatable
{
    public function getPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
