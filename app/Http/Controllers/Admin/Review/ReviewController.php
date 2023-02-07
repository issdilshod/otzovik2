<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Account\UserService;
use App\Http\Services\Admin\Misc\FileService;
use App\Http\Services\Admin\Review\ReviewService;
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
    
    public function index(Request $request)
    {
        $data['title'] = __('reviews_title');

        $data['list'] = $this->reviewService->findAll();

        return view('admin.pages.review.reviews', $data);
    }

    public function store(Request $request)
    {
        // permission
        $validated = $this->reviewService->validate($request);

        if ($this->reviewService->create($validated)){
            return redirect('admin/reviews')->with('status', '200');
        }

        return redirect('admin/reviews')->with('status', '500'); 
    }

    public function get(Request $request, $id = '')
    {
        // permission
        $data['title'] = __('review_add_title');

        // universities

        if ($id!=''){
            $data['review'] = $this->reviewService->findById($id);
            $data['title'] = __('review_edit_title') . ' '; // TODO: Number of review 
        }

        return view('admin.pages.review.review', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        // permission
        $this->reviewService->delete($id);

        return redirect('admin/reviews')->with('status', 'ok');
    }

    public function api_store(Request $request)
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