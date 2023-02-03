<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\University\DirectionService;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    
    private $directionService;

    public function __construct()
    {
        $this->directionService = new DirectionService();
    }

    public function index(Request $request)
    {
        // permission
        $data['title'] = '';

        return view();
    }

    public function store(Request $request)
    {
        // permission
        
    }

    public function get(Request $request, $id)
    {
        // permission
        $data['title'] = '';

        return view();
    }

    public function update(Request $request, $id)
    {
        // permission
    }

    public function destroy(Request $request, $id)
    {
        // permission
    }

}
