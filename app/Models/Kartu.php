<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu extends Model
{
    use HasFactory;

    protected $table = 'kartu';
    protected $fillabel = [
        'kode','nama','dsikon','iuran'
    ];

    public function pelanggan(){
        return $this->hasmany(Pelanggan::class);
    }
}
