<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = 'tb_siswa';
    protected $guarded = [
        'id'
    ];

    use HasFactory;
}
