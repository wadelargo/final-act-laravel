<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Trainor;
use Illuminate\Http\Request;

class TrainorsController extends Controller
{
    public function index() 
    {
        $t = Trainor::orderBy('id')->get();

        return view('trainor.index', ['trainors' => $t]);
    }

    

    public function store(Request $request) {

        $request->validate([
            'user_id' => 'required|numeric',
            'specialty' => 'required'
        ]);

        Trainor::create([
            'user_id' => $request->user_id,
            'specialty' => $request->specialty
        ]);

        return redirect('/trainors')->with('message', 'A new user has been added');
    }
    public function create() {

        $users = User::list();
        return view('trainor.create', ['users' => $users]);
    }
}

