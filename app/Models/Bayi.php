<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayi extends Model
{
    use HasFactory;

    protected $table = 'bayi';
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin','tanggal_lahir'];
}

