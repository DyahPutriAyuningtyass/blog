<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //kasi tau nama tabel
    protected $table = 'karyawan';
    
    public $timestamps = false;
    //yang kedua atributnya
    protected $fillable = [
        'karyawan_id',
        'karyawan_name',
        'karyawan_address',
        'telpon_karyawan'
    ];
}
