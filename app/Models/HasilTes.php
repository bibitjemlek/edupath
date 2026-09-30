<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilTes extends Model
{
    protected $table = 'hasil_tes';

    protected $fillable = [
        'nama',
        'kelas',
        'mapel',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'kemampuan_utama',
        'persentase_utama',
        'kemampuan_kedua',
        'persentase_kedua',
        'jurusan_utama',
        'jurusan_planb',
    ];

    protected $casts = [
        'mapel' => 'array',
    ];
}