<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nonpns extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama','jenis_kelamin','nama_instansi','jabatan','nomor_hp','signature'    
    ];
}
