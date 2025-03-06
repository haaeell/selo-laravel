<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    use HasFactory;

    protected $table = 'lansia';
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin','tanggal_lahir'];
}