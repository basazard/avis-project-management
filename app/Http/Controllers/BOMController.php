<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BOMController extends Controller
{
    public function index()
    {
        return view('bom.index');
    }
}
