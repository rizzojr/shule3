<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
