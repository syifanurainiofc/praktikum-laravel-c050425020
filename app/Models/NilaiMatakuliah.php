<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiMatakuliah extends Model
{
    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}
