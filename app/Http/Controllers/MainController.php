<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
    // page main
    public function index(Request $request)
    {
        $data = [];

        return view('pages.welcome', $data);
    }

    // page search
    public function search(Request $request)
    {
        $data = [];

        return view('pages.serach', $data);
    }

    // page universities
    public function universities(Request $request)
    {
        $data = [];

        return view('pages.universities', $data);
    }

    // page university
    public function university(Request $request, $universitySlug)
    {
        $data = [];

        return view('pages.university', $data);
    }

    // page reviews
    public function reviews(Request $request, $universitySlug)
    {
        $data = [];

        return view('pages.reviews', $data);
    }

    // page review
    public function review(Request $request, $reviewSlug)
    {
        $data = [];

        return view('pages.review', $data);
    }

    // page articates
    public function articles(Request $request)
    {
        $data = [];

        return view('pages.articles', $data);
    }

    // page article
    public function article(Request $request, $articleSlug)
    {
        $data = [];

        return view('pages.article', $data);
    }

    // page about
    public function about(Request $request)
    {
        $data = [];

        return view('pages.about', $data);
    }

    // page educational
    public function educational(Request $request)
    {
        $data = [];

        return view('pages.educational', $data);
    }

    // page faq
    public function faq(Request $request)
    {
        $data = [];

        return view('pages.faq', $data);
    }

    // page add review
    public function review_add(Request $request)
    {
        $data = [];

        return view('pages.review_add', $data);
    }

    // page top
    public function top(Request $request)
    {
        $data = [];

        return view('pages.top', $data);
    }

}
