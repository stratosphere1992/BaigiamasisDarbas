<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Advertisement;

// Nebereikalingas, žiūrėti į FrontAdsController + Advertisements modelį

class MenuController extends Controller
{
    public function menu() {
        // $menus = Category::with('subcategories')->get();
        // return view('index',compact('menus'));

        // $category = Category::where('name', 'guitars')->first();
        // $firstAds = Advertisement::where('category_id', $category->id)->orderByDesc('id')->take(4)->get();
        // $secondsAds = Advertisement::where('category_id', $category->id)->whereNotIn('id',$firstAds->pluck('id')->toArray())->take(4)->get();
        // return view('index',compact('firstAds','secondsAds','category'));
    }
}
