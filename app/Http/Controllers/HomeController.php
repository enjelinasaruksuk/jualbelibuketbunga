<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //    'nama' => 'Enjelina',
        //     'pekerjaan' => 'Pegawai BUMN',
        // ];

        // return view('home')->with($data);

        $nama = "Enjelina";
        $pekerjaan = "Direktur utama";
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
