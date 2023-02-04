<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdsFormRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Advertisement;
use Illuminate\Support\Str;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::where('user_id',auth()->user()->id)->get();
        return view('ads.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $menus = Category::with('subcategories')->get();
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdsFormRequest $request)
    {
        $data = $request->all();
        $featureImage = $request->file('feature_image')->store('public/ads');
        $first_image = $request->file('first_image')->store('public/ads');
        $second_image = $request->file('second_image')->store('public/ads');
        $data['feature_image'] = $featureImage;
        $data['first_image'] = $first_image;
        $data['second_image'] = $second_image;
        $data['slug'] = Str::slug($request->name);
        $data['user_id']=auth()->user()->id;

        Advertisement::create($data);
        return "created";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
