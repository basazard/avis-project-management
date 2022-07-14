<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AVQualitySystemController extends Controller
{
    public function index()
    {
        return view('av_quality_system.index');
    }
}
