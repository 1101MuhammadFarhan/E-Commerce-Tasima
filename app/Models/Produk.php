<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $table ='produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'foto_produk',
        'stok_produk',
        'proses_produksi',
        'foto_proses_produksi',
    ];
}
