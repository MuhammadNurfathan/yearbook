<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiModels extends Model
{
    use HasFactory;

    protected $table = 'program_studi';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(MahasiswaModels::class, 'program_studi_id');
    }
}
