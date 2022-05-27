<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokIndikator extends Model
{
    use HasFactory;
    protected $fillable = [
        'pertanyaan',
        'id_indikator'
    ];

    public function indikators(){
        return $this->belongsTo(Indikator::class, 'id_indikator');
    }
}
