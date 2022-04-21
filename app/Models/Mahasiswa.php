<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; //Model Eloquent
// use App\Models\Mahasiswa;

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey

    protected $fillable=[
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'foto',
        // 'kelas'
        // 'Jenis_Kelamin',
        // 'Email',
        // 'Alamat',
        // 'Tanggal_Lahir',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    
    public function mahasiswa_matakuliah()
    {
        return $this->hasMany(Mahasiswa_MataKuliah::class, 'mahasiswa_id', 'id_mahasiswa');
    }
};
