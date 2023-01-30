<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index(Request $request)
    {
        $data = [];

        return view('pages.welcome', $data);
    }

}
