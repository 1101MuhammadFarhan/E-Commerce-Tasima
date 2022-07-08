<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItems extends Model
{
    use HasFactory;

    protected $table="order_items";
    protected $fillable = [
        'order_id',
        'id_produk',
        'qty',
        'total_harga',
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'id_produk' , 'id_produk');
    }

}
