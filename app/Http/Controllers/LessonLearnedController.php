<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonLearnedController extends Controller
{
    public function index()
    {
        return view('lesson_learned.index');
    }
}
