<?php

namespace App\Http\Controllers;

use App\Services\Admin\Blog\ArticleService;
use App\Services\Admin\Blog\ArticleViewService;
use App\Services\Admin\Blog\CommentService;
use App\Services\Admin\Review\ReviewService;
use App\Services\Admin\Setting\CityService;
use App\Services\Admin\Setting\DirectionService;
use App\Services\Admin\Setting\EducationLevelService;
use App\Services\Admin\Setting\EducationTypeService;
use App\Services\Admin\Setting\SettingService;
use App\Services\Admin\University\UniversityService;
use App\Services\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainController extends Controller
{

    private $mainService;
    private $universityService;
    private $directionService;
    private $educationTypeService;
    private $reviewService;
    private $educationLevelService;
    private $articleService;
    private $articleViewService;
    private $commentService;
    private $cityService;
    private $settingService;

    public function __construct()
    {
        $this->mainService = new MainService();
        $this->universityService = new UniversityService();
        $this->directionService = new DirectionService();
        $this->educationTypeService = new EducationTypeService();
        $this->reviewService = new ReviewService();
        $this->educationLevelService = new EducationLevelService();
        $this->articleService = new ArticleService();
        $this->articleViewService = new ArticleViewService();
        $this->commentService = new CommentService();
        $this->cityService = new CityService();
        $this->settingService = new SettingService();
    }
    
    // page main
    public function index(Request $request)
    {
        $data['title'] = __('main_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['top_universities'] = $this->universityService->top();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular();  

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.index'));
        $data['settings']['current_page'] = Config::get('pages.index');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.welcome', $data);
    }

    // page search
    public function search(Request $request)
    {
        $data['title'] = __('search_page_title');

        $data['directions'] = $this->directionService->getAll();
        $data['education_types'] = $this->educationTypeService->getAll();
        $data['education_levels'] = $this->educationLevelService->getAll();
        $data['cities'] = $this->cityService->findAll(); 

        // search result universities
        $data['list'] = $this->universityService->findAllFront();

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.search'));
        $data['settings']['current_page'] = Config::get('pages.search');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.serach', $data);
    }

    // page universities
    public function universities(Request $request)
    {
        $data['title'] = __('universities_page_title');

        $data['directions'] = $this->directionService->getAll();
        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['list'] = $this->universityService->findAllFront();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.universities'));
        $data['settings']['current_page'] = Config::get('pages.universities');
        $data['settings']['mode'] = $this->mainService->_mode($request);

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

        $data['university']->statistic = $this->reviewService->staticticByUniversity($data['university']->id);

        $data['title'] .= ' ' . $data['university']->name;
        $data['cities'] = $this->cityService->findAll();

        $data['list'] = $this->reviewService->findByUniversity($data['university']->id);
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.university'));
        $data['settings']['current_page'] = Config::get('pages.university');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.university', $data);
    }

    // page reviews
    public function reviews(Request $request)
    {
        $data['title'] = __('reviews_page_title');

        $data['directions'] = $this->directionService->getAll();
        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_universities'] = $this->universityService->popular();
        $data['last_articles'] = $this->articleService->last();
        $data['list'] = $this->reviewService->findAllFront();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.reviews'));
        $data['settings']['current_page'] = Config::get('pages.reviews');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.reviews', $data);
    }

    // page review
    public function review(Request $request, $reviewNumber)
    {
        $data['title'] = __('review_page_title');

        $data['current_review'] = $this->reviewService->findByNumber($reviewNumber);

        if (!$data['current_review']){
            abort(404);
        }

        $data['title'] .= ' ' . $data['current_review']->university_name . ' № ' . $data['current_review']->number;
        $data['cities'] = $this->cityService->findAll();

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['university_reviews'] = $this->reviewService->other_university($data['current_review']->university_id);
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.review'));
        $data['settings']['current_page'] = Config::get('pages.review');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.review', $data);
    }

    // page articates
    public function articles(Request $request)
    {
        $data['title'] = __('articles_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['list'] = $this->articleService->findAllFront();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        $data['today'] = $this->articleService->today(); // today date & count of articles for today

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.articles'));
        $data['settings']['current_page'] = Config::get('pages.articles');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.articles', $data);
    }

    // page article
    public function article(Request $request, $articleSlug)
    {
        $data['title'] = __('article_page_title');

        $data['current_article'] = $this->articleService->findBySlug($articleSlug);

        if (!$data['current_article']){
            abort(404);
        }

        $data['current_article']['comments'] = $this->commentService->findByArticle($data['current_article']->id);

        // view article
        $this->articleViewService->store($data['current_article']->id);

        $data['cities'] = $this->cityService->findAll();

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.article'));
        $data['settings']['current_page'] = Config::get('pages.article');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.article', $data);
    }

    // page about
    public function about(Request $request)
    {
        $data['title'] = __('about_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['settings']['current_page'] = Config::get('pages.settings');
        $data['settings'] = $this->settingService->findByPage(Config::get('pages.settings'));

        return view('pages.about', $data);
    }

    // page educational
    public function educational(Request $request)
    {
        $data['title'] = __('educational_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_universities'] = $this->universityService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['settings']['current_page'] = Config::get('pages.educational');
        $data['settings'] = $this->settingService->findByPage(Config::get('pages.educational'));

        return view('pages.educational', $data);
    }

    // page faq
    public function faq(Request $request)
    {
        $data['title'] = __('faq_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['settings']['current_page'] = Config::get('pages.faq');
        $data['settings'] = $this->settingService->findByPage(Config::get('pages.faq'));

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
        $data['cities'] = $this->cityService->findAll(); 

        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['settings']['current_page'] = Config::get('pages.review_add');
        $data['settings'] = $this->settingService->findByPage(Config::get('pages.review_add'));

        return view('pages.review_add', $data);
    }

    // page top
    public function top(Request $request)
    {
        $data['title'] = __('top_universities_page_title');

        $data['cities'] = $this->cityService->findAll();

        $data['top_universities'] = $this->universityService->top();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['settings']['current_page'] = Config::get('pages.top');
        $data['settings'] = $this->settingService->findByPage(Config::get('pages.top'));

        return view('pages.top', $data);
    }

}
