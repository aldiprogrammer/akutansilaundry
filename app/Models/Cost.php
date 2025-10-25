<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{


    public function expense()
    {
        return $this->hasMany(Expenses::class, 'id_cost');
    }
}
