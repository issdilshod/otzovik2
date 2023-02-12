<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Services\Admin\Setting\CityService;
use Illuminate\Http\Request;

class CityController extends Controller
{

    private $cityService;

    public function __construct()
    {
        $this->cityService = new CityService();
    }
    
    public function index(Request $request)
    {
        // permission
        $data['title'] = __('cities_title');

        $data['list'] = $this->cityService->findAll();

        return view('admin.pages.setting.city.cities', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $this->cityService->validate($request);

        if ($this->cityService->save($validated)){
            return redirect('admin/settings/cities')->with('status', '200');
        }

        return redirect('admin/settings/cities')->with('status', '500');
    }

    public function show(Request $request, $id = '')
    {
        // permission
        $data['title'] = __('city_add_title');

        if ($id!=''){
            $data['city'] = $this->cityService->find($id);
            $data['title'] = __('city_edit_title') . ' ' . $data['city']->name;
        }
        
        return view('admin.pages.setting.city.city', $data);
    }

    public function update(Request $request, $id)
    {
        // permission
        $validated = $this->cityService->validate($request);

        if ($this->cityService->save($validated, $id)){
            return redirect('admin/settings/cities')->with('status', '200');
        }

        return redirect('admin/settings/cities')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        // permission
        $this->cityService->delete($id);
        return redirect('admin/settings/cities')->with('status', '200');
    }

    public function api_index(Request $request)
    {
        //
    }

}
