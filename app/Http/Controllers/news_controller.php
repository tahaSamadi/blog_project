<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\news_cat;
use Illuminate\Http\Request;

class news_controller extends Controller
{
    public function index(news_cat $news_cat=null){
        $categories=news_cat::where('active',1)->get();
        $news=news::paginate(5);
        if(isset($news_cat) && !empty($news_cat)){
            $news=$news_cat->news()->paginate(5);
        }
        return view('news',compact('categories','news_cat','news'));
    }
    public function news(news $news){
        return $news;
    }
}
