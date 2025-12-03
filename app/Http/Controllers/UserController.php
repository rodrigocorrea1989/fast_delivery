<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class UserController extends Controller
{

    public function users()
    {

        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {

            $users = User::orderBy('created_at', 'desc')->get();
            return view('usuarios.users', compact('users'));
        }
    }


    public function profile()
    {
        return view('usuarios.profile');
    }


    public function new()
    {

        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {
            return view('usuarios.new');
        }
    }

    public function save_new(Request $request)
    {

        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
                'tipo' => 'required|int',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'tipo' => $request->tipo,
            ]);

            $users = User::orderBy('created_at', 'desc')->get();
            return view('usuarios.users', compact('users'));
        }
    }

    public function delete_user($id)
    {

        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {

            $user = User::findOrFail($id);
            $user->delete();

            $users = User::orderBy('created_at', 'desc')->get();
            return view('usuarios.users', compact('users'));
        }
    }


    public function edit_user($id)
    {
        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {
            $user = User::findOrFail($id);
            return view('usuarios.edit_user', compact('user'));
        }
    }

    public function edit(Request $request, $id)
    {

        $tipo = auth()->user()->tipo;

        if ($tipo == 0) {

            return view('restricted');
        } else {

            $user = User::findOrFail($id);

            // Validación
            $request->validate([
                'email' => 'required|email',
                'password' => 'nullable|min:6',
                'tipo' => 'required|int',
            ]);

            // Actualizar email
            $user->email = $request->email;

            //actualizar tipo
            $user->tipo = $request->tipo;

            // Si se envió una contraseña nueva, actualizarla
            if ($request->password != null) {
                $user->password = bcrypt($request->password);
            }

            $user->save();

            $users = User::orderBy('created_at', 'desc')->get();
            return view('usuarios.users', compact('users'));
        }
    }
}
