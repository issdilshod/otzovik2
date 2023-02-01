<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    private $universityService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
    }
    
    public function index(Request $request)
    {
        // permission
        $data = [];

        $data['list'] = $this->universityService->findAll();

        return view('admin.pages.university.universities', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => '',
            'current_user_id' => ''
        ]);

        // check

        $university = $this->universityService->create($validated);

        if ($university)
        {
            // logo upload

            return redirect('admin/universities')->with('status', 'ok'); 
        }

        return redirect('admin/universities')->with('status', 'error');
    }

    public function get(Request $request, $id = '')
    {
        // permission
        $data = [];

        if ($id!=''){
            $data['university'] = $this->universityService->find($id);
        }

        return view('admin.pages.university.university', $data);
    }

    public function update(Request $request, $id)
    {
        // permission
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => '',
            'current_user_id' => ''
        ]);

        $university = $this->universityService->update($validated, $id);

        if ($university)
        {
            // logo upload

            return redirect('admin/universities')->with('status', 'ok'); 
        }

        return redirect('admin/universities')->with('status', 'error');
    }

    public function destroy(Request $request, $id)
    {
        // permission

        $this->universityService->delete($id);

        return redirect('admin/universities')->with('status', 'ok');
    }

}
