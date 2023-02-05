<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\User;

class Advertisement extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function childcategory()
    {
        return $this->hasOne(Childcategory::class, 'id', 'childcategory_id');
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Pakeitimas MenuController

    // Gitaros
    public function scopeFirstFourAdsInCaurosel($query, $categoryId)
    {
        return $query->where('category_id', $categoryId)->orderByDesc('id')->take(4)->get();
    }
    public function scopeSecondFourAdsInCaurosel($query, $categoryId)
    {
        $firstAds = $this->scopeFirstFourAdsInCaurosel($query, $categoryId);
        return $query->where('category_id', $categoryId)->whereNotIn('id',$firstAds->pluck('id')->toArray())->take(4)->get();
    }

    // Stiprintuvai
    public function scopeFirstFourAdsInCauroselForAmps($query, $categoryId)
    {
        return $query->where('category_id', $categoryId)->orderByDesc('id')->take(4)->get();
    }
    public function scopeSecondFourAdsInCauroselForAmps($query, $categoryId)
    {
        $firstAds = $this->scopeFirstFourAdsInCaurosel($query, $categoryId);
        return $query->where('category_id', $categoryId)->whereNotIn('id',$firstAds->pluck('id')->toArray())->take(4)->get();
    }
}
