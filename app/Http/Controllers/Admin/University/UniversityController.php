<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Misc\FileService;
use App\Http\Services\Admin\University\DirectionService;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    private $universityService;
    private $fileService;
    private $directionsService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->fileService = new FileService();
        $this->directionsService = new DirectionService();
    }
    
    public function index(Request $request)
    {
        // permission
        $data['title'] = __('universities_title');

        $data['list'] = $this->universityService->findAll();

        return view('admin.pages.universities.university.universities', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $this->universityService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->universityService->create($validated)){
            return redirect('admin/universities/universities')->with('status', '200');
        }

        return redirect('admin/universities/universities')->with('status', '500');
    }

    public function get(Request $request, $id = '')
    {
        // permission
        $data['title'] = __('university_add_title');

        $data['directions'] = $this->directionsService->getAll();

        if ($id!=''){
            $data['university'] = $this->universityService->find($id);
            $data['title'] = __('university_edit_title') . ' ' . $data['university']->name;
        }

        return view('admin.pages.universities.university.university', $data);
    }

    public function update(Request $request, $id)
    {
        // permission
        $validated = $this->universityService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->universityService->update($validated, $id))
        {
            return redirect('admin/universities/universities')->with('status', '200'); 
        }

        return redirect('admin/universities/universities')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        // permission
        $this->universityService->delete($id);

        return redirect('admin/universities/universities')->with('status', 'ok');
    }

}
