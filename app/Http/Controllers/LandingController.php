<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    function home() : View {
        return view('welcome');
    }

    function about() : View {
        return view('pages.about');
    }

    function works() : View {
        return view('pages.works');
    }

    function contact() : View {
        return view('pages.contact');
    }
}
