<?php

namespace App\Models;

use App\Models\OrderItems;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table="orders";
    protected $fillable = [
        'user_id',
        'nama_pemesan',
        'email',
        'no_telepon',
        'alamat',
        'total_harga',
        'bukti_pembayaran',
        'status',
        'message',
        'tracking_no',
    ];

    public function total_pembayaran()
    {
        return $this->where('status','Sampai ke Pembeli')->sum('total_harga');
    }
    public function orderitems()
    {
        return $this->hasMany(OrderItems::class);
    }

}
