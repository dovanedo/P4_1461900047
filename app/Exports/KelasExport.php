<?php

namespace App\Exports;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KelasExport implements FromView
{
    public function view(): View
    {
        $data = DB::table("kelas")
            ->select("siswa.nama as siswa", "guru.nama as guru", "guru.mengajar as pelajaran")
            ->join("siswa", "siswa.id", "kelas.id_siswa")
            ->join("guru", "guru.id", "kelas.id_guru")
            ->orderBy("kelas.id", "desc")
            ->get();

            return view('exports_data_1461900047', ['data' => $data ]);
    }
}