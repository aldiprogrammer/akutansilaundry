<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{


    public function lokasito()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }


    public function costto()
    {
        return $this->belongsTo(Cost::class, 'id_cost');
    }
}
