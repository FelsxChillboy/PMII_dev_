<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    // Menentukan nama tabel (opsional tapi disarankan agar rapi)
    protected $table = 'pengurus';

    // Kolom yang diizinkan untuk diisi massal
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'foto_url',
        'instagram_url',
        'email',
        'is_active',
    ];
}
