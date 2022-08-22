<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip','nama', 'jenis_kelamin', 'nama_instansi', 'jabatan', 'no_hp', 'ttd'
    ];

    // protected $appends = [
    //     'jk'
    // ];

    protected $attributes = [
        'nip'=>null
    ];

    // public function getJkAttribute()
    // {
    //     $jk='';
    //     if ($this->jenis_kelamin === 'L') {
    //         $jk='Laki-laki';
    //     } else {
    //         $jk='Perempuan';
    //     }
    //     return ucfirst($jk);        
    // }
}
