<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MahasiswaModels extends Model
{
    protected $table = 'mahasiswa';
        protected $fillable = [
        'program_studi_id',
        'nim',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'foto_profil',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_telepon',
        'email',
        'motto',
        'cita_cita',
        'kesan_pesan',
        'quote_favorit',
        'instagram',
        'twitter',
        'linkedin',
        'hobi',
        'prestasi',
        'organisasi',
        'urutan',
        'is_active',
    ];

    public function prodi(){
        return $this->belongsTo(ProdiModels::class, 'id');
    }
}
