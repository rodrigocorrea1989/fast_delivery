<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class UserController extends Controller
{
    public function users()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('usuarios.users', compact('users'));
    }


    public function new()
    {
        return view('usuarios.new');
    }

    public function save_new(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $users = User::orderBy('created_at', 'desc')->get();
        return view('usuarios.users', compact('users'));
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $users = User::orderBy('created_at', 'desc')->get();
        return view('usuarios.users', compact('users'));
    }
}
