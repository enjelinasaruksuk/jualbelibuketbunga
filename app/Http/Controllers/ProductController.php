<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
{
    $data = [
        ['id' => 1, 'Product' => 'Buket Mawar Merah'],
        ['id' => 2, 'Product' => 'Buket Lily Putih'],
        ['id' => 3, 'Product' => 'Buket Matahari Cerah']
    ];

    return view('list_product', compact('data'));
}
}
