<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function edit(){
    	$user = Auth::user();
    	return view('settings', compact('user'));
    }

    public function update(Request $request){
    	$rules = [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'gender' => 'required',
            'birthdate' => 'required|date',
        ];
        $this->validate($request, $rules);

        $data = $request->all();
        $user = Auth::user();
        $user->update($data);

        return redirect(route('profile'));
    }
}
