<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Admin\Account\UserService;
use App\Services\Admin\Blog\ArticleService;
use App\Services\Admin\Platform\PlatformService;
use App\Services\Admin\Review\ReviewService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private $platformService;
    private $reviewService;
    private $userService;
    private $articleService;

    public function __construct()
    {
        $this->platformService = new PlatformService();
        $this->reviewService = new ReviewService();
        $this->userService = new UserService();
        $this->articleService = new ArticleService();
    }

    public function index(Request $request)
    {
        $data['title'] = __('dashboard_title');

        // count
        $data['platform_count'] = $this->platformService->findCount();
        $data['review_count'] = $this->reviewService->findCount();
        $data['article_count'] = $this->articleService->findCount();
        $data['user_count'] = $this->userService->findCount();

        return view('admin.pages.dashboard', $data);
    }

}
