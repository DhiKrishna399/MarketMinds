<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultScreen extends Controller
{
    public function index()
    {
        return view('resultScreen');
    }
}
