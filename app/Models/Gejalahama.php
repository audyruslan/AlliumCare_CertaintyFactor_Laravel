<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejalahama extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    public static function generateGejalaHamaCode()
    {
        $lastHama = self::orderBy('id', 'desc')->first();
        if ($lastHama) {
            $lastCode = $lastHama->code;
            $codeNumber = intval(substr($lastCode, 2)) + 1;
        } else {
            $codeNumber = 1;
        }

        $newCode = 'GH' . str_pad($codeNumber, 2, '0', STR_PAD_LEFT);
        return $newCode;
    }

    public function ruleshamas()
    {
        return $this->hasMany(Ruleshama::class);
    }

    public function hamas()
    {
        return $this->belongsToMany(Hama::class)->withPivot('value');
    }
}