<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function home()
    {
         return view('home');
    }

    public function index()
    {
         return view('about');
    }
}
