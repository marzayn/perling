<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $popup = json_decode(File::get(public_path('assets/json/home/popup.json')), true);
        $faqs = json_decode(File::get(public_path('assets/json/home/faq.json')), true);
        $heros = json_decode(File::get(public_path('assets/json/home/hero.json')), true);
        $konten = json_decode(File::get(public_path('assets/json/home/news.json')), true);

         usort($konten, function($a, $b) {
            return strcmp($b['date'], $a['date']);
        });

        $newsItems  = array_values(array_filter($konten, fn($i) => $i['type'] === 'news'));
        $videoItems = array_values(array_filter($konten, fn($i) => $i['type'] === 'video'));

        return view('frontend.home', compact('popup', 'heros','faqs', 'newsItems', 'videoItems'));
    }
}
