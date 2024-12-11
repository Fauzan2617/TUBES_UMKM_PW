<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        
        User::create($validateData);

        // $request->session()->flash('success', 'Registration Successfull');
        return redirect('/login')->with('success', 'Registration Successfull! Please login brader');
    }
}