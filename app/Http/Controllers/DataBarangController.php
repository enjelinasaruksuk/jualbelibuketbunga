<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBarangController extends Controller
{

    public function getData()
    {
        return [
            ['id' => 1, 'nama' => 'Buket bunga matahari', 'harga' => 250000],
            ['id' => 2, 'nama' => 'Buket bunga mawar', 'harga' => 200000],
            ['id' => 3, 'nama' => 'Buket bunga tulip', 'harga' => 300000],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('data_barang', compact('data'));
    }
}
