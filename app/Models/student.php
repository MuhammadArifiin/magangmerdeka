<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function major()
    {
        return $this->belongsTo(major::class);
    }

    public function classes()
    {
        return $this->belongsTo(classes::class);
    }
}
