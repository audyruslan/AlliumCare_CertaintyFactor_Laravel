<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hama extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'code',
    'name',
    'det_hama',
    'srn_hama',
    'images'
  ];

  public static function generateHamaCode()
  {
    $lastHama = self::orderBy('id', 'desc')->first();
    if ($lastHama) {
      $lastCode = $lastHama->code;
      $codeNumber = intval(substr($lastCode, 1)) + 1;
    } else {
      $codeNumber = 1;
    }

    $newCode = 'H' . $codeNumber;
    return $newCode;
  }


  public function history()
  {
    return $this->hasMany(Hasilhama::class);
  }

  public function ruleshamas()
  {
    return $this->hasMany(Ruleshama::class);
  }

  public function gejalas()
  {
    return $this->belongsToMany(Gejalahama::class)->withPivot('value_cf');
  }
}