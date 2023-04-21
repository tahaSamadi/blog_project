<?php

use App\Http\Controllers\news_controller;
use Illuminate\Support\Facades\Route;

//news&&news_cat
Route::get('news/{news_cat:slug?}',[news_controller::class,'index'])->name('news.show_all');
Route::post('news/{news_cat:slug?}',[news_controller::class,'index'])->name('news.show_all');
Route::get('news/{news:slug}',[news_controller::class,'news'])->name('news.single');
