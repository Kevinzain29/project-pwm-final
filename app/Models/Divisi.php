<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    // 1 divisi punya banyak pengurus
    public function penguruses()
    {
        return $this->hasMany(Pengurus::class);
    }
}
