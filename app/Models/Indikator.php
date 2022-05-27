<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_indikator"
    ];
    
    public function produkss(){
        return $this->belongsToMany(Produk::class, "indikator_produk", "id_indikator", "id_produk");
    }

    public function kelompok(){
        return $this->hasMany(KelompokIndikator::class, "id_indikator");
    }
}
