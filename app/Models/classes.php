<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    public function students()
    {
        return $this->hasMany(student::class);
    }
}
