<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrawingController extends Controller
{
    public function index()
    {
        return view('drawing.index');
    }
}
