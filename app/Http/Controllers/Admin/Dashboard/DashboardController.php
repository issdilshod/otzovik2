<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Admin\Account\UserService;
use App\Services\Admin\Blog\ArticleService;
use App\Services\Admin\Review\ReviewService;
use App\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private $universityService;
    private $reviewService;
    private $userService;
    private $articleService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->reviewService = new ReviewService();
        $this->userService = new UserService();
        $this->articleService = new ArticleService();
    }

    public function index(Request $request)
    {
        $data['title'] = __('dashboard_title');

        // count
        $data['university_count'] = $this->universityService->findCount();
        $data['review_count'] = $this->reviewService->findCount();
        $data['article_count'] = $this->articleService->findCount();
        $data['user_count'] = $this->userService->findCount();

        return view('admin.pages.dashboard', $data);
    }

}
