<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineesController extends Controller
{
    public function index() 
    {
        $t = Trainee::orderBy('status')->get();

        return view('trainee.index', ['trainees' => $t]);
    }
}
