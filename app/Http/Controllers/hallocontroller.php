<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hallocontroller extends Controller
{
    public function index(){
        return view("hallo");
    }
}