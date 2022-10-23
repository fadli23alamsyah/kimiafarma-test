<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            "user" => User::find(Auth::user()->id),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if($request->email != $user->email){
            $rules['email'] = 'required|email:dns|unique:users';
        }

        if($request->password != null){
            $rules['password'] = 'required|min:5|max:255';
        }

        
        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);

        return redirect('/');
    }
}
