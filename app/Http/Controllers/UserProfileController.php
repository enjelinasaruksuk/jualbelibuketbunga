<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function edit()
    {
        return view('editprofilpembeli');
    }
}