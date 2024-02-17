<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about-us');
    }

    function contact(){
        return view('contact-us');
    }
    function unscramble(){
        return view('unscramble');
    }
}

