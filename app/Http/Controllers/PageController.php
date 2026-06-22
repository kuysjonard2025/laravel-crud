<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('welcome', compact('title'));
    }
}
