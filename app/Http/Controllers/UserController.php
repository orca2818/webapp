<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'new_password' => 'required|string|min:8',
        ]);
    }

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

    public function password(Request $request, $id) {
        if (Hash::check($request->oldPassword, Auth::user()->password)){
            //$this->validator($request->all())->validate();
            Auth::user()->password = Hash::make($request->newPassword);
            $user = User::find($id);
            $user->password = Hash::make($request->newPassword);
            $user->save();

        } else {
            return view('/password')->with('warning', 'パスワードが違います');
        }
        return view('/profile')->with('profileChange', 'パスワードを変更しました');
    }


}
