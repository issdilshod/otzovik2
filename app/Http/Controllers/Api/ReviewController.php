<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Account\UserService;
use App\Http\Services\Admin\Misc\FileService;
use App\Http\Services\Api\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ReviewController extends Controller
{
    private $reviewService;
    private $userService;
    private $fileService;

    public function __construct()
    {
        $this->reviewService = new ReviewService();
        $this->userService = new UserService();
        $this->fileService = new FileService();
    }
    
    public function store(Request $request)
    {
        $review = $this->reviewService->validate($request);

        // create user

        $user = [
            'first_name' => $request->has('first_name')?$request->input('first_name'):'',
            'last_name' => $request->has('last_name')?$request->input('last_name'):'',
            'email' => $request->has('email')?$request->input('email'):'',
            'role' => Config::get('roles.user'),
            'status' => Config::get('status.wait')
        ];

        // avatar
        if ($request->hasFile('avatar')){
            $user['avatar'] = $this->fileService->upload($request, $user['first_name'] . ' ' . $user['last_name'], 'avatar');
        }

        $user = $this->userService->store($user);

        // create review
        $review['user_id'] = $user->id;
        $review['status'] = Config::get('status.wait');

        $this->reviewService->create($review);

        return response()->json(['msg' => 'success'], 200);
    }

}
