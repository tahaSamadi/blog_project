<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\news_cat;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function index(news_cat $news_cat=null){
        $categories=news_cat::where('active',1)->get();
        return view('news',compact('categories','news_cat'));
    }
}
