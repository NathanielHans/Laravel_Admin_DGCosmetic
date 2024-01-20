<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'barcode',
        'nama_produk',
        'harga_jual',
        'harga_beli',
        'stock_barang',
        'id_kategori',
        'id_supplier',
    ];

    // Relasi dengan Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    // Relasi dengan Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class, 'produk_id');
    }
}
