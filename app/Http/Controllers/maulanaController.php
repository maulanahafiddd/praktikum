<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maulanaController extends Controller
{
    public function home(){
        return view("home0138");
    }
    public function artikel(){
        return view("artikel0138");
    }
    public function contactus(){
        return view("contactus0138");
    }
}
