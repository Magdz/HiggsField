<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use App\PhoneNumber;

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
            // 'profile_picture' => 'image',
        ];
        $this->validate($request, $rules);
        $user = Auth::user();
        foreach ($request->phone_number as $number):
            $data['user_id'] = Auth::id();
            $data['phone_number'] = $number;
            PhoneNumber::create($data);
        endforeach;
        $data = $request->all();
        if($request->hasFile('profile_picture'))
        {
            $file = Helper::upload($request->file('profile_picture'), 'profile');
            $data['profile_picture'] = $file['url'];
        }

        $user = Auth::user();
        $user->update($data);

        return redirect(route('profile'));
    }
}