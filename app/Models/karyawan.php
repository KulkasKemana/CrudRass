<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table ='karyawan';
    protected $fillable =['nip','nama_karyawan','gaji_karyawan','alamat','jenis_kelamin','foto'];
}
