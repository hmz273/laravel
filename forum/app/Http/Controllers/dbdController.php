<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbdController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }
}
