<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    use HasFactory;

    protected $table = 'ibu_hamil';
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin','tanggal_lahir'];
}
