<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengurus extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisi_id',
        'nama',
        'jabatan',
        'deskripsi',
        'gambar'
    ];

    // 1 pengurus milik 1 divisi
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
}