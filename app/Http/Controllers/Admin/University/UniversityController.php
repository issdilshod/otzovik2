<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Services\Admin\Misc\FileService;
use App\Services\Admin\Setting\CityService;
use App\Services\Admin\Setting\DirectionService;
use App\Services\Admin\Setting\EducationLevelService;
use App\Services\Admin\Setting\EducationTypeService;
use App\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    private $universityService;
    private $fileService;
    private $directionsService;
    private $educationTypeService;
    private $educationLevelService;
    private $citySevice;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->fileService = new FileService();
        $this->directionsService = new DirectionService();
        $this->educationTypeService = new EducationTypeService();
        $this->educationLevelService = new EducationLevelService();
        $this->citySevice = new CityService();
    }
    
    public function index(Request $request)
    {
        // permission
        $data['title'] = __('universities_title');

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
        $data['title'] = __('university_add_title');

        $data['directions'] = $this->directionsService->getAll();
        $data['education_types'] = $this->educationTypeService->getAll();
        $data['education_levels'] = $this->educationLevelService->getAll();

        if ($id!=''){
            $data['university'] = $this->universityService->find($id);
            $data['title'] = __('university_edit_title') . ' ' . $data['university']->name;
        }

        $data['cities'] = $this->citySevice->getAll();

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
