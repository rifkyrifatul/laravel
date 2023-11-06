<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_produk extends Model
{
    use HasFactory;
    //mapping table
    protected $table = 'jenis_produk';
    //mapping kolom atau field
    protected $fillable = ['nama'];
    //relasi antara table

    public function produk(){
        return $this->hasmany(Produk::class);
    }
}
