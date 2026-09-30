<?php

namespace App\Exports;

use App\Models\HasilTes;
use Illuminate\Support\Enumerable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class HasilTesExport implements FromCollection, WithHeadings
{
    public function collection(): Enumerable
    {
        return HasilTes::select(
            'id',
            'nama',
            'kelas',
            'mapel',
            'kemampuan_utama',
            'persentase_utama',
            'kemampuan_kedua',
            'persentase_kedua',
            'jurusan_utama',
            'jurusan_planb',
            'created_at'
        )->get();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Kelas Asal',
            'Mata Pelajaran',
            'Kemampuan Utama',
            'Persentase Utama',
            'Kemampuan Kedua',
            'Persentase Kedua',
            'Jurusan Utama',
            'Plan B',
            'Tanggal Tes',
        ];
    }
}