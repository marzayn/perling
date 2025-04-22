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
}
