<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class No1 extends Model
{
    use HasFactory;

    //Public Static Function
    public static function generate(){
        $daftar = array(
            'Basis Data',
            'RPL',
            'Bahasa Pemograman',
            'Aljabar',
            'Matematika Diskrit',
            'Kalkulus'
        );
        return $daftar[array_rand($daftar)];
    }
}
