<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardhome extends Controller
{
    public function index (){

        return view('views_admin/dashboardhome');
    }
}
