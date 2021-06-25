<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        //compact('users') = ['users' => 'users']
        return view('user/index', compact('users'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('user/show', compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('user/edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->name = $request-> name;
        $user->email = $request-> email;
        $user->email_verified_at = now();
        $user->save();
        //$user->fill($request->all())->save();
        return redirect("/user");
    }

    public function delete($id) {
        User::destroy($id);
        return redirect('/user');
    }

    public function home(Request $request) {
        $user = User::where('id', $request -> id)->where('password', $request -> password)->first();
        
        return view('/home/index', compact('user'));
    }
}
