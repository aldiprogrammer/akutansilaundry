<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{

    protected $fillable = ['nama_store', 'lokasi', 'nama_investor', 'persentase'];
}
