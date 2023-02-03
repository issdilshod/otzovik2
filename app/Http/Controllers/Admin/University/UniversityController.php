<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Misc\FileService;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    private $universityService;
    private $fileService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->fileService = new FileService();
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
        $validated = $this->universityService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->universityService->create($validated)){
            return redirect('admin/universities')->with('status', '200');
        }

        return redirect('admin/universities')->with('status', '500');
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
        $validated = $this->universityService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->universityService->update($validated, $id))
        {
            return redirect('admin/universities')->with('status', '200'); 
        }

        return redirect('admin/universities')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        // permission

        $this->universityService->delete($id);

        return redirect('admin/universities')->with('status', 'ok');
    }

}
