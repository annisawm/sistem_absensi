<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jenis_kelamin', 'nama_instansi', 'jabatan', 'no_hp', 'ttd'
    ];

    protected $attributes = [
        'nip'=>null
    ];
}
