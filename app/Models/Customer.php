<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }
}
