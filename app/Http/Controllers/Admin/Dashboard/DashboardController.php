<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\Account\UserService;
use App\Http\Services\Admin\Review\ReviewService;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private $universityService;
    private $reviewService;
    private $userService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->reviewService = new ReviewService();
        $this->userService = new UserService();
    }

    public function index(Request $request)
    {
        $data['title'] = __('dashboard_title');

        // count
        $data['university_count'] = $this->universityService->findCount();
        $data['review_count'] = $this->reviewService->findCount();
        
        $data['user_count'] = $this->userService->findCount();

        return view('admin.pages.dashboard', $data);
    }

}
