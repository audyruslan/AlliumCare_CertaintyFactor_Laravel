<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejalapenyakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    public static function generateGejalaPenyakitCode()
    {
        $lastHama = self::orderBy('id', 'desc')->first();
        if ($lastHama) {
            $lastCode = $lastHama->code;
            $codeNumber = intval(substr($lastCode, 2)) + 1;
        } else {
            $codeNumber = 1;
        }

        $newCode = 'GP' . str_pad($codeNumber, 2, '0', STR_PAD_LEFT);
        return $newCode;
    }

    public function rulespenyakits()
    {
        return $this->hasMany(Rulespenyakit::class);
    }

    public function penyakits()
    {
        return $this->belongsToMany(Penyakit::class)->withPivot('value');
    }
}