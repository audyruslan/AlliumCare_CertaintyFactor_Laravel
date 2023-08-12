<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilpenyakit extends Model
{ 
    use HasFactory;

    protected $fillable = [
    'nama',
    'id_penyakit',
    'hasil_diagnosa',
    'cf_max',
    'gejala_terpilih',
    'file_pdf'
    ];

    public function penyakit(){
        return $this->belongsTo(Penyakit::class);
    }
}