<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function userCount()
    {
        $userCount = User::count();
        return view('dashboard', compact('userCount'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('users')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view($user);
    }
    
}
