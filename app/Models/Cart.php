<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable= [
        'user_id',
        'id_produk',
        'jumlah_produk',
    ];

    public function products()
    {
        return $this->belongsTo(produk::class,'id_produk','id_produk');
    }
}
