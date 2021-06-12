<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KelasExport;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table("kelas")
            ->select("siswa.nama as siswa", "guru.nama as guru", "guru.mengajar as pelajaran")
            ->join("siswa", "siswa.id", "kelas.id_siswa")
            ->join("guru", "guru.id", "kelas.id_guru")
            ->orderBy("kelas.id", "desc")->get();


        return view('index-0047', ["data" => $data]);
    }
    public function Export()
    {
        return Excel::download(new KelasExport, 'data_1461900047.xlsx');
    }
 }