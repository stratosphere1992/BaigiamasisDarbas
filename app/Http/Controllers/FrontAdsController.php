<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;

class FrontAdsController extends Controller
{
    public function index()
    {
        // Kategorija - gitaros
        $category = Category::CategoryGuitars();
        $firstAds = Advertisement::firstFourAdsInCaurosel($category->id);
        $secondsAds = Advertisement::secondFourAdsInCaurosel($category->id);

        // Kategorija - stiprintuvai
        $categoryAmps = Category::CategoryAmps();
        $firstAdsForAmps = Advertisement::firstFourAdsInCauroselForAmps($categoryAmps->id);
        $secondsAdsForAmps = Advertisement::secondFourAdsInCauroselForAmps($categoryAmps->id);

        return view('index',compact('firstAds','secondsAds','category', 'categoryAmps', 'firstAdsForAmps', 'secondsAdsForAmps'));
    }
}
