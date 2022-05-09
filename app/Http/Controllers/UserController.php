<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user/index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('user/create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $users = new User();
        $users -> name = $request -> name;
        $users -> email = $request -> email;
        $users -> password = Hash::make($request -> password);
        $users -> role_id = $request -> role;
        $users -> save();

        return response()->redirectToRoute('');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user/show', ['user' => $user]);
    }
}
