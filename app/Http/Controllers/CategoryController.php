<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Kategorijų atvaizdavimas puslapyje
        $categories = Category::get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Formos atvaizdavimas
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        // Įrašų patalpinimui
        $image = $request->file('image')->store('public/category');
        // Tikrina ar tuščias
        Category::create([
            'name'=>$name= $request->name,
            'image'=>$image ,
            'slug'=>Str::slug( $name)
        ]);
        // Poopout pranešimas
        return redirect()->route('category.index')->with('message', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Individualūs įrašai
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Įrašo koreagavimas
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
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
        // Tikrinama ar yra įkeltas paveikslėlis prieš įkeliant naują, atnaujinama duombazė
        $category = Category::find($id);
        if($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/category');
            $category->update(['name'=>$request->name,'image'=>$image]);
        }
        // Jeigu nėra paveikslėlio, atnaujinamas tik pavadinimas
        $category->update(['name'=>$request->name]);
        return redirect()->route('category.index')->with('message', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Viso kategorijos įrašo pašalinimas
        $category = Category::find($id);
        if (Storage::delete($category->image)) {
            $category->delete();
        }
        return back()->with('message', 'Category deleted successfully');
    }
}