<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function showAbout()
    {
        return view('about');
    }
    public function index()
    {
        return view('authors.index');
    }

}
