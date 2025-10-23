<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{

    protected $fillable = ['nama_store', 'lokasi', 'nama_investor', 'persentase'];


    /**
     * Get all of the comments for the Lokasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_lokasi');
    }
}
