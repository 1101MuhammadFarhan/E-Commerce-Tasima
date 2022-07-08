<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilUsaha extends Model
{
    use HasFactory;

    protected $table ='profil_usaha';
    protected $primaryKey = 'idProfil_usaha';
    protected $fillable = [
        'foto_profil',
        'nama_usaha',
        'pemilik_usaha',
        'noTelepon',
        'email',
        'alamat',
    ];
}
