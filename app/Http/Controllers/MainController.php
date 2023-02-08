<?php

namespace App\Http\Controllers;

use App\Http\Services\Admin\Review\ReviewService;
use App\Http\Services\Admin\University\DirectionService;
use App\Http\Services\Admin\University\EducationTypeService;
use App\Http\Services\Admin\University\UniversityService;
use Illuminate\Http\Request;

class MainController extends Controller
{

    private $universityService;
    private $directionService;
    private $educationTypeService;
    private $reviewService;

    public function __construct()
    {
        $this->universityService = new UniversityService();
        $this->directionService = new DirectionService();
        $this->educationTypeService = new EducationTypeService();
        $this->reviewService = new ReviewService();
    }
    
    // page main
    public function index(Request $request)
    {
        $data['title'] = __('main_page_title');

        // top universities
        $data['top_universities'] = $this->universityService->top();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.welcome', $data);
    }

    // page search
    public function search(Request $request)
    {
        $data['title'] = __('search_page_title');

        // directions
        $data['directions'] = $this->directionService->getAll();

        // education types
        $data['education_types'] = $this->educationTypeService->getAll();

        // search result universities
        $data['list'] = $this->universityService->findAll();

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.serach', $data);
    }

    // page universities
    public function universities(Request $request)
    {
        $data['title'] = __('universities_page_title');

        // directions
        $data['directions'] = $this->directionService->getAll();

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        // search result universities
        $data['list'] = $this->universityService->findAll();

        return view('pages.universities', $data);
    }

    // page university
    public function university(Request $request, $universitySlug)
    {
        $data['title'] = __('university_page_title');

        $data['university'] = $this->universityService->findBySlug($universitySlug);
        if (!$data['university']){ // not found
            return abort(404);
        }

        $data['title'] .= ' ' . $data['university']->name;

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.university', $data);
    }

    // page reviews
    public function reviews(Request $request)
    {
        $data['title'] = __('reviews_page_title');

        // directions
        $data['directions'] = $this->directionService->getAll();

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // reviews
        $data['list'] = $this->reviewService->findAll();

        return view('pages.reviews', $data);
    }

    // page review
    public function review(Request $request, $universitySlug, $reviewNumber)
    {
        $data['title'] = __('review_page_title');

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        $data['current_review'] = $this->reviewService->findByUniversityNumber($universitySlug, $reviewNumber);

        if (!$data['current_review']){
            abort(404);
        }

        $data['title'] .= ' ' . $data['current_review']->university_name . ' № ' . $data['current_review']->number;

        // TODO: other reviews of university

        return view('pages.review', $data);
    }

    // page articates
    public function articles(Request $request)
    {
        $data['title'] = __('articles_page_title');

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.articles', $data);
    }

    // page article
    public function article(Request $request, $articleSlug)
    {
        $data['title'] = __('article_page_title');

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.article', $data);
    }

    // page about
    public function about(Request $request)
    {
        $data['title'] = __('about_page_title');

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.about', $data);
    }

    // page educational
    public function educational(Request $request)
    {
        $data['title'] = __('educational_page_title');

        // popular universities
        $data['popular_universities'] = $this->universityService->popular();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.educational', $data);
    }

    // page faq
    public function faq(Request $request)
    {
        $data['title'] = __('faq_page_title');

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.faq', $data);
    }

    // page add review
    public function review_add(Request $request, $universitySlug)
    {
        $data['title'] = __('review_add_page');

        $data['university'] = $this->universityService->findBySlug($universitySlug);
        if (!$data['university']){ // not found
            return abort(404);
        }

        $data['title'] .= ' - ' . $data['university']->name;

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.review_add', $data);
    }

    // page top
    public function top(Request $request)
    {
        $data['title'] = __('top_universities_page_title');

        // top universities
        $data['top_universities'] = $this->universityService->top();

        // popular reviews
        $data['popular_reviews'] = $this->reviewService->popular();

        // last reviews
        $data['last_reviews'] = $this->reviewService->last();

        return view('pages.top', $data);
    }

}
