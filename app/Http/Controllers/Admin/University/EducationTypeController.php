<?php

namespace App\Http\Controllers\Admin\University;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\University\EducationTypeService;
use Illuminate\Http\Request;

class EducationTypeController extends Controller
{
    private $educationTypeService;

    public function __construct()
    {
        $this->educationTypeService = new EducationTypeService();
    }

    public function index(Request $request)
    {
        // permission
        $data['title'] = __('education_types_title');

        $data['list'] = $this->educationTypeService->findAll();

        return view('admin.pages.universities.education_type.education_types', $data);
    }

    public function store(Request $request)
    {
        //permission
        $validated = $this->educationTypeService->validate($request);

        if ($this->educationTypeService->create($validated)){
            return redirect('admin/universities/education_types')->with('status', '200');
        }

        return redirect('admin/universities/education_types')->with('status', '500');
    }

    public function get(Request $request, $id = '')
    {
        //permission
        $data['title'] = __('education_type_add_title');

        if ($id!=''){
            $data['education_type'] = $this->educationTypeService->find($id);
            $data['title'] = __('education_type_edit_title') . ' ' . $data['education_type']->name;
        }

        return view('admin.pages.universities.education_type.education_type', $data);
    }

    public function update(Request $request, $id)
    {
        //permission
        $validated = $this->educationTypeService->validate($request);

        if ($this->educationTypeService->update($validated, $id)){
            return redirect('admin/universities/education_types')->with('status', '200');
        }

        return redirect('admin/universities/education_types')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        //permission
        $this->educationTypeService->delete($id);

        return redirect('admin/universities/education_types')->with('status', 'ok');
    }

}
