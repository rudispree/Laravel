<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pelanggan extends Model
{
    use softDeletes;


    protected $table = 'pelanggan';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat'
    ];

    protected $hidden;
}
