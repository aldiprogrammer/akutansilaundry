<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{


    public function customer()
    {
        return $this->hasMany(Customer::class, 'id_level');
    }
}
