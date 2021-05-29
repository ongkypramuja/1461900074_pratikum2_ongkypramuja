<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AbsenController extends Controller
{
    public function absen(Request $request)
    {
        $data = DB::table("absen")
            ->join("siswa", "siswa.nis", "absen.nis")
            ->join("semester", "semester.id_semester", "absen.id_semester")
            ->where("semester.status", "Ganjil")
            ->get();

        // dd($data);

        return view("0074index",compact('data'));
    }
}
