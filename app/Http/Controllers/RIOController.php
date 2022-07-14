<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RIOController extends Controller
{
   public function index()
   {
    return view('rio.index');
   }
}
