<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pelanggan', 'nama_pelanggan', 'alamat_pelanggan', 'no_hp', 
    ];
}
