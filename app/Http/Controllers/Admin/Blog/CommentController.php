<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Services\Admin\Account\UserService;
use App\Services\Admin\Blog\CommentService;
use App\Services\Admin\Misc\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CommentController extends Controller
{

    private $commentService;
    private $fileService;
    private $userService;

    public function __construct()
    {
        $this->commentService = new CommentService();
        $this->fileService = new FileService();
        $this->userService = new UserService();
    }
    
    public function api_store(Request $request)
    {
        //
        $comment = $this->commentService->validate($request);

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
        $comment['user_id'] = $user->id;
        $comment['status'] = Config::get('status.wait');

        $this->commentService->save($comment);

        return response()->json(['msg' => 'success'], 200);
    }

}
