<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //kasi tau nama tabel
    protected $table = 'employee';

    //laravel dafultnya id
    protected $primaryKey = 'employee_id';

    public $timestamps = false;

    //yang kedua atributnya
    protected $fillable = [
        'employee_id',
        'employee_name',
        'employee_address',
        'employee_phone_number'
    ];
}
