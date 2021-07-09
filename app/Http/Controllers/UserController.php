<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        //compact('users') = ['users' => 'users']
        return view('user/index', compact('users'));
    }

    public function setting(Request $request, $id) {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return view('/profile');
    }

}
