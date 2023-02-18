<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Services\Admin\Setting\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    private $settingService;

    public function __construct()
    {
        $this->settingService = new SettingService();
    }

    public function api_update(Request $request, $key)
    {
        $validated = $request->validate([
            'value' => 'required',
            'user_id' => '',
        ]);

        $this->settingService->saveByKey($validated, $key);

        return response()->json(['msg' => 'success'], 200);
    }

    public function index(Request $request)
    {
        // permission

        return view('admin.pages.setting.setting.settings', [
            'src' => url('/').'?_mode='.Config::get('app._mode.edit').'&_token='.Session::get('token')[0]
        ]);
    }

    public function search(Request $request)
    {
        // permission

        return view('admin.pages.setting.setting.settings', [
            'src' => url('/poisk').'?_mode='.Config::get('app._mode.edit').'&_token='.Session::get('token')[0]
        ]);
    }

}
