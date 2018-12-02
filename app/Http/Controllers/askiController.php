<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class askiController extends Controller
{
    public function index()
    {
        return view('aski');
    }
}
