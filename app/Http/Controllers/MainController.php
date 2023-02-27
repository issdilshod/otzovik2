<?php

namespace App\Http\Controllers;

use App\Services\Admin\Blog\ArticleService;
use App\Services\Admin\Blog\ArticleViewService;
use App\Services\Admin\Blog\CommentService;
use App\Services\Admin\Misc\SlugService;
use App\Services\Admin\Platform\PlatformService;
use App\Services\Admin\Review\ReviewService;
use App\Services\Admin\Setting\CityService;
use App\Services\Admin\Setting\SettingService;
use App\Services\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainController extends Controller
{

    private $mainService;
    private $platformService;
    private $reviewService;
    private $articleService;
    private $articleViewService;
    private $commentService;
    private $cityService;
    private $settingService;

    public function __construct()
    {
        $this->mainService = new MainService();
        $this->platformService = new PlatformService();
        $this->reviewService = new ReviewService();
        $this->articleService = new ArticleService();
        $this->articleViewService = new ArticleViewService();
        $this->commentService = new CommentService();
        $this->cityService = new CityService();
        $this->settingService = new SettingService();
    }

    // e 404
    public function e404(Request $request)
    {
        $data['cities'] = $this->cityService->findAll(); 
        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.index'));
        $data['settings']['current_page'] = Config::get('pages.index');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return $data;
    }
    
    // page main
    public function index(Request $request)
    {
        $data['title'] = __('main_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_platforms'] = $this->platformService->popular();
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
    public function search(Request $request, $slug1 = '', $slug2 = '')
    {
        // detect slugs
        $city = ''; $page = '';
        // slug1
        if (SlugService::isCity($slug1)){ $city = SlugService::isCity($slug1); }
        if (SlugService::isPage($slug1)){ $page = SlugService::isPage($slug1); }
        // slug2
        if (SlugService::isCity($slug2)){ $city = SlugService::isCity($slug2); }
        if (SlugService::isPage($slug2)){ $page = SlugService::isPage($slug2); }

        $data['title'] = __('search_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        // search result platforms
        $data['list'] = $this->platformService->findAllFront($page);

        $data['popular_platforms'] = $this->platformService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.search'));
        $data['settings']['current_page'] = Config::get('pages.search');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.search', $data);
    }

    // page platforms
    public function platforms(Request $request, $slug1 = '', $slug2 = '', $slug3 = '')
    {
        // detect slugs
        $city = ''; $page = ''; $filter = '';
        // slug1
        if (SlugService::isCity($slug1)){ $city = SlugService::isCity($slug1); }
        if (SlugService::isPage($slug1)){ $page = SlugService::isPage($slug1); }
        if (SlugService::isPlatformFilter($slug1)){ $filter = $slug1; }
        // slug2
        if (SlugService::isCity($slug2)){ $city = SlugService::isCity($slug2); }
        if (SlugService::isPage($slug2)){ $page = SlugService::isPage($slug2); }
        if (SlugService::isPlatformFilter($slug2)){ $filter = $slug2; }
        // slug3
        if (SlugService::isCity($slug3)){ $city = SlugService::isCity($slug3); }
        if (SlugService::isPage($slug3)){ $page = SlugService::isPage($slug3); }
        if (SlugService::isPlatformFilter($slug3)){ $filter = $slug3; }

        $data['title'] = __('platforms_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_minimal_platforms'] = $this->platformService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular();  
        $data['list'] = $this->platformService->findAllFront($page, $filter);


        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.platforms'));
        $data['settings']['current_page'] = Config::get('pages.platforms');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.platforms', $data);
    }

    // page platform
    public function platform(Request $request, $platformSlug = '', $slug1 = '')
    {
        $page = ''; $data['review_active'] = false;
        if (SlugService::isPage($slug1)){ $page = SlugService::isPage($slug1); $data['review_active'] = true; }

        // mode of page
        $data['settings']['mode'] = $this->mainService->_mode($request);

        $data['title'] = __('platform_page_title');

        if (!$data['settings']['mode'] && $platformSlug==''){
            return abort(404);
        }else if (!$data['settings']['mode'] && $platformSlug!=''){
            $data['platform'] = $this->platformService->findBySlug($platformSlug);
            if (!$data['platform']){ // not found
                return abort(404);
            }
        }else{
            $data['platform'] = $this->platformService->first();
        }

        $data['platform']->statistic = $this->reviewService->staticticByPlatform($data['platform']->id);

        $data['title'] .= ' ' . $data['platform']->name;
        $data['cities'] = $this->cityService->findAll();

        $data['list'] = $this->reviewService->findByPlatform($data['platform']->id, $page);
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.platform'));
        $data['settings']['current_page'] = Config::get('pages.platform');
        

        return view('pages.platform', $data);
    }

    // page add platform
    public function platform_add(Request $request)
    {
        // mode of page
        $data['settings']['mode'] = $this->mainService->_mode($request);

        $data['title'] = __('platform_add_page_title');

        $data['cities'] = $this->cityService->findAll();
        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.platform_add'));
        $data['settings']['current_page'] = Config::get('pages.platform_add');

        return view('pages.platform_add', $data);
    }

    // page reviews
    public function reviews(Request $request, $slug1 = '')
    {
        $page = '';
        if (SlugService::isPage($slug1)){ $page = SlugService::isPage($slug1); }

        $data['title'] = __('reviews_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['popular_minimal_platforms'] = $this->platformService->popular();
        $data['popular_platforms'] = $this->platformService->popular();
        $data['popular_articles'] = $this->articleService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['list'] = $this->reviewService->findAllFront($page);

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.reviews'));
        $data['settings']['current_page'] = Config::get('pages.reviews');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.reviews', $data);
    }

    // page review
    public function review(Request $request, $reviewNumber = '')
    {
        // mode of page
        $data['settings']['mode'] = $this->mainService->_mode($request);

        $data['title'] = __('review_page_title');

        if (!$data['settings']['mode'] && $reviewNumber==''){
            return abort(404);
        }else if (!$data['settings']['mode'] && $reviewNumber!=''){
            $data['current_review'] = $this->reviewService->findByNumber($reviewNumber);
            if (!$data['current_review']){
                return abort(404);
            }
        }else{
            $data['current_review'] = $this->reviewService->first();
        }

        $data['title'] .= ' ' . $data['current_review']->platform_name . ' № ' . $data['current_review']->number;
        $data['cities'] = $this->cityService->findAll();

        $data['popular_platforms'] = $this->platformService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['platform_reviews'] = $this->reviewService->other_platform($data['current_review']->platform_id);
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.review'));
        $data['settings']['current_page'] = Config::get('pages.review');

        return view('pages.review', $data);
    }

    // page add review
    public function review_add(Request $request, $platformSlug = '')
    {
        // mode of page
        $data['settings']['mode'] = $this->mainService->_mode($request);

        $data['title'] = __('review_add_page');

        if (!$data['settings']['mode']){
            $data['platform'] = $this->platformService->findBySlug($platformSlug);
            if ($data['platform']){
                $data['title'] .= ' - ' . $data['platform']->name;
            }
            //if (!$data['platform']){ // not found
            //    return abort(404);
            //}
        }else{
            $data['platform'] = $this->platformService->first();
        }

        $data['cities'] = $this->cityService->findAll(); 

        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.review_add'));
        $data['settings']['current_page'] = Config::get('pages.review_add');

        $data['platforms'] = $this->platformService->getAll();

        return view('pages.review_add', $data);
    }

    // page articates
    public function articles(Request $request, $slug1 = '')
    {
        $page = '';
        if (SlugService::isPage($slug1)){ $page = SlugService::isPage($slug1); }

        $data['title'] = __('articles_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['list'] = $this->articleService->findAllFront($page);
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
            return abort(404);
        }
        
        $data['current_article']['comments'] = $this->commentService->findByArticle($data['current_article']->id);

        // view article
        $this->articleViewService->store($data['current_article']->id);

        $data['cities'] = $this->cityService->findAll();

        $data['popular_platforms'] = $this->platformService->popular();
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

        $data['popular_platforms'] = $this->platformService->popular();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.about'));
        $data['settings']['current_page'] = Config::get('pages.about');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.about', $data);
    }

    // page faq
    public function faq(Request $request)
    {
        $data['title'] = __('faq_page_title');

        $data['cities'] = $this->cityService->findAll(); 

        $data['last_reviews'] = $this->reviewService->last();

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.faq'));
        $data['settings']['current_page'] = Config::get('pages.faq');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.faq', $data);
    }

    // page top
    public function top(Request $request)
    {
        $data['title'] = __('top_platforms_page_title');

        $data['cities'] = $this->cityService->findAll();

        $data['top_platforms'] = $this->platformService->top();
        $data['popular_reviews'] = $this->reviewService->popular();
        $data['last_reviews'] = $this->reviewService->last();
        $data['popular_articles'] = $this->articleService->popular(); 

        // settings
        $data['template'] = $this->settingService->findByPage(Config::get('pages.top'));
        $data['settings']['current_page'] = Config::get('pages.top');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.top', $data);
    }

    // privacy policy
    public function policy(Request $request)
    {
        //
        $data['title'] = '';

        $data['cities'] = $this->cityService->findAll(); 

        $data['template'] = $this->settingService->findByPage(Config::get('pages.policy'));
        $data['settings']['current_page'] = Config::get('pages.policy');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.policy', $data);
    }

    // aggrement
    public function legal(Request $request)
    {
        //
        $data['title'] = '';

        $data['cities'] = $this->cityService->findAll(); 

        $data['template'] = $this->settingService->findByPage(Config::get('pages.legal'));
        $data['settings']['current_page'] = Config::get('pages.legal');
        $data['settings']['mode'] = $this->mainService->_mode($request);

        return view('pages.legal', $data);
    }

}
