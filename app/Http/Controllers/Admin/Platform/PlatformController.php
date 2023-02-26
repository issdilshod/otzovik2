<?php

namespace App\Http\Controllers\Admin\Platform;

use App\Http\Controllers\Controller;
use App\Services\Admin\Account\UserService;
use App\Services\Admin\Misc\FileService;
use App\Services\Admin\Platform\PlatformService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PlatformController extends Controller{

    private $platformService;
    private $fileService;
    private $userService;

    public function __construct()
    {
        $this->platformService = new PlatformService();
        $this->fileService = new FileService();
        $this->userService = new UserService();
    }

    public function index(Request $request)
    {
        // permission
        $data['title'] = __('platforms_title');

        $data['list'] = $this->platformService->findAll();

        $data['status'] = Config::get('status');

        return view('admin.pages.platform.platforms', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $this->platformService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->platformService->create($validated)){
            return redirect('admin/platforms')->with('status', '200');
        }

        return redirect('admin/platforms')->with('status', '500');
    }

    public function get(Request $request, $id = '')
    {
        // permission
        $data['title'] = __('platform_add_title');

        if ($id!=''){
            $data['platform'] = $this->platformService->find($id);
            $data['title'] = __('platform_edit_title') . ' ' . $data['platform']->name;
        }

        return view('admin.pages.platform.platform', $data);
    }

    public function update(Request $request, $id)
    {
        // permission
        $validated = $this->platformService->validate($request);

        // logo upload
        $validated['logo'] = $this->fileService->upload($request, $validated['name']);

        if ($this->platformService->update($validated, $id))
        {
            return redirect('admin/platforms')->with('status', '200'); 
        }

        return redirect('admin/platforms')->with('status', '500');
    }

    public function destroy(Request $request, $id)
    {
        // permission
        $this->platformService->delete($id);

        return redirect('admin/platforms')->with('status', '200');
    }

    public function api_store(Request $request)
    {
        //TODO: First I need Template
        // main validation
        /*$validated = $request->validate([
            'user' => 'array',
            'platform' => 'array'
        ]);

        // user validation
        if (!isset($validated['user']['first_name']) || 
            !isset($validated['user']['email']) || 
            !isset($validated['user']['phone']))
        {
            return response()->json(['msg' => 'wrong content'], 422);
        }

        // university validation
        if (!isset($validated['university']['name']) || 
            !isset($validated['university']['city_id']) || 
            !isset($validated['university']['address']) ||
            !isset($validated['university']['website']) ||
            !isset($validated['university']['phones']) ||
            !isset($validated['university']['email']) ||
            !isset($validated['university']['description']))
        {
            return response()->json(['msg' => 'wrong content'], 422);
        }

        // user create
        $user = [
            'first_name' => $validated['user']['first_name'],
            'middle_name' => isset($validated['user']['middle_name'])?$validated['user']['middle_name']:'',
            'last_name' => isset($validated['user']['last_name'])?$validated['user']['last_name']:'',
            'email' => $validated['user']['email'],
            'phone' => $validated['user']['phone'].isset($validated['user']['extra_phone'])?', '.$validated['user']['extra_phone']:'',
            'role' => Config::get('roles.user'),
            'status' => Config::get('status.wait')
        ];

        // avatar
        if ($request->hasFile('avatar')){
            $user['avatar'] = $this->fileService->upload($request, $user['first_name'] . ' ' . $user['last_name'], 'avatar');
        }

        $user = $this->userService->store($user);

        // university create
        $university = [
            'current_user_id' => $user->id,
            'name' => $validated['university']['name'],
            'city_id' => $validated['university']['city_id'],
            'address' => $validated['university']['address'],
            'website' => $validated['university']['website'],
            'phones' => $validated['university']['phones'].isset($validated['university']['extra_phones'])?', '.$validated['university']['extra_phones']:'',
            'email' => $validated['university']['email'],
            'description' => $validated['university']['description'],
            'status' => Config::get('status.wait')
        ];

        $this->universityService->create($university);

        return response()->json(['msg' => 'success'], 200);*/
    }

}