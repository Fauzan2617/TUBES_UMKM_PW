<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudproduk extends Controller
{
    public function index (){

        return view('views_admin/crudproduk');
    }
}
