<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier',
        // tambahkan atribut lain jika diperlukan
    ];

    // Relasi dengan Produk
    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_supplier');
    }
}
