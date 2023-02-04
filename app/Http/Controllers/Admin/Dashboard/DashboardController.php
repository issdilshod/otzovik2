<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private $universityService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
    }

    public function index(Request $request)
    {
        $data['title'] = __('dashboard_title');

        // count
        $data['university_count'] = $this->universityService->findCount();

        return view('admin.pages.dashboard', $data);
    }

}
