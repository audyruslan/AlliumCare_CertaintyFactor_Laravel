<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruleshama extends Model
{
    use HasFactory;

    protected $table = 'gejalahama_hama';

    protected $fillable = [
      'hama_id',
      'gejalahama_id',
      'value'
    ];

    public function hamas(){
      return $this->belongsTo(Hama::class);
    }

    public function gejalahama(){
      return $this->belongsTo(Gejalahama::class);
    }
}
