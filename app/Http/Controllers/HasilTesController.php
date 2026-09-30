<?php

namespace App\Http\Controllers;

use App\Models\HasilTes;
use Illuminate\Http\Request;

class HasilTesController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:100',

            'mapel' => 'required|array',

            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'q5' => 'required|string',
            'q6' => 'required|string',
            'q7' => 'required|string',
            'q8' => 'required|string',
            'q9' => 'required|string',
            'q10' => 'required|string',

            'kemampuan_utama' => 'required|string',
            'persentase_utama' => 'required|integer',

            'kemampuan_kedua' => 'nullable|string',
            'persentase_kedua' => 'nullable|integer',

            'jurusan_utama' => 'required|string',
            'jurusan_planb' => 'required|string',
        ]);

        $hasil = HasilTes::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Hasil tes berhasil disimpan.',
            'data' => $hasil,
        ]);
    }
}