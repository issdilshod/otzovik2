<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Setting\EducationLevelService;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    
    private $educationLevelService;

    public function __construct()
    {
        $this->educationLevelService = new EducationLevelService();
    }

    public function index(Request $request)
    {
        // permission
        $data['title'] = __('education_levels_title');

        $data['list'] = $this->educationLevelService->findAll();

        return view('admin.pages.setting.education_level.education_levels', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $this->educationLevelService->validate($request);

        if ($this->educationLevelService->save($validated)){
            return redirect('admin/settings/education_levels')->with('status', '200');
        }

        return redirect('admin/settings/education_levels')->with('status', '500');
    }

    public function show(Request $request, $id = '')
    {
        // permission
        $data['title'] = __('education_level_add_title');

        if ($id!=''){
            $data['education_level'] = $this->educationLevelService->find($id);
            $data['title'] = __('education_level_edit_title') . ' ' . $data['education_level']->name;
        }

        return view('admin.pages.setting.education_level.education_level', $data);
    }

    public function update(Request $request, $id)
    {
        // permission
        $validated = $this->educationLevelService->validate($request);

        if ($this->educationLevelService->save($validated, $id)){
            return redirect('admin/settings/education_levels')->with('status', '200');
        }

        return redirect('admin/settings/education_levels')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        // permission
        $this->educationLevelService->delete($id);
        return redirect('admin/settings/education_levels')->with('status', '200');
    }


}
