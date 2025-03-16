<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item = ['Item 1', 'Item 2', 'Item 3'];
        return view('item', compact('item'));
    }
}
