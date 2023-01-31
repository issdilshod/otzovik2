<?php

namespace App\Http\Controllers\Admin\Error;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    
    public function e401(Request $request)
    {
        //
        $data = [];

        return view('admin.pages.errors.401', $data);
    }

    public function e403(Request $request)
    {
        //
        $data = [];

        return view('admin.pages.errors.403', $data);
    }

    public function e404(Request $request)
    {
        //
        $data = [];

        return view('admin.pages.errors.404', $data);
    }

}
