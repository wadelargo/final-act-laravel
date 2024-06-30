<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index() 
    {
        $c = Course::orderBy('id')->get();

        return view('course.index', ['courses' => $c]);
    }
}
