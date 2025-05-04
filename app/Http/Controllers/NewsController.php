<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('frontend.news');
    }

    public function detail()
    {
        return view('frontend.news_detail');
    }

    public function index_newsvideo()
    {
        return view('news.index_news');
    }


    public function create_newsvideo()
    {
        return view('news.create_news');
    }
}
