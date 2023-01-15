<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class student extends Model
{
    use Sortable;
    public function kelas()
    {
        return $this->belongsTo(klasses::class);
    }

    public function major()
    {
        // return $this->belongsTo(classes::class);
        return $this->belongsTo(major::class);
    }
}
