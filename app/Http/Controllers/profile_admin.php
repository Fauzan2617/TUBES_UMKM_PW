<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_admin extends Controller
{
    public function index (){

        return view('views_admin/profile');
    }
}
