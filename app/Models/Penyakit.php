<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'name',
        'det_penyakit',
        'srn_penyakit',
        'images'
    ];

    public static function generatePenyakitCode()
    {
        $lastHama = self::orderBy('id', 'desc')->first();
        if ($lastHama) {
            $lastCode = $lastHama->code;
            $codeNumber = intval(substr($lastCode, 1)) + 1;
        } else {
            $codeNumber = 1;
        }

        $newCode = 'P' . $codeNumber;
        return $newCode;
    }

    public function history()
    {
        return $this->hasMany(Hasilpenyakit::class);
    }

    public function rulespenyakits()
    {
        return $this->hasMany(Rulespenyakit::class);
    }
    public function gejalas()
    {
        return $this->belongsToMany(Gejalahama::class)->withPivot('value_cf');
    }
}