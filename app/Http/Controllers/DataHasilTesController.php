<?php

namespace App\Http\Controllers;

use App\Models\HasilTes;

class DataHasilTesController extends Controller
{
    public function index()
    {
        $hasilTes = HasilTes::latest()->get();

        return view('data-hasil-tes', compact('hasilTes'));
    }
}