<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nombre = "Robert";
        return view('welcome', compact('nombre'));
    }
}
