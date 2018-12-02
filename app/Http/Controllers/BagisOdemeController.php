<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagisOdemeController extends Controller
{
    public function index()
    {
        return view('bagis');
    }
}
