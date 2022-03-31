<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Mahasiswa extends Model
{
    protected $table='mahasiswa';// Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa

    protected $primaryKey='id_mahasiswa';//Memanggil isi DB Dengan primaryKey

    protected $fillable=[
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'jenis_kelamin',
        'email',
        'alamat',
        'tanggal_lahir',
    ];
};
