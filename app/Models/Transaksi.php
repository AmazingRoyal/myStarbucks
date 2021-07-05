<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['id_user', 'id_produk', 'jumlah', 'poin', 'harga'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
