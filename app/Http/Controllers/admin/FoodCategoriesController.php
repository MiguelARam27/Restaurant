<?php

namespace App\Http\Controllers\admin;
use App\FoodCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $categories = FoodCategory::paginate(10); 
        return view('admin/food-categories/all',['categories'=>$categories]);
    }
    public function create(){

        return view('admin/food-categories/create');
    }
    public function store(){

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'file'],
        ]);
        
        $category_image= request('image');
        $product_image_name = $category_image->getClientOriginalName();
        $category_image -> move('uploads/categories/', $product_image_name);

        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image = 'uploads/categories/' . $product_image_name;
    
        $category->save();

       
        return redirect('/admin/food-categories');
    }
    public function edit($id){
        $category = FoodCategory::find($id);
        
        return view('admin/food-categories/edit', [
            'category' => $category
        ]);

    }
    public function update($id){
    
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'file']
        ]);

        $category_image= request('image');
        $product_image_name = $category_image->getClientOriginalName();
        $category_image -> move('uploads/categories/', $product_image_name);
        
        $category = FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image = 'uploads/categories/' . $product_image_name;
        $category->save();

        return redirect('/admin/food-categories');
    }

    public function delete($id){
        $category = FoodCategory::find($id);
        $category->delete();
        return redirect('/admin/food-categories');
    }
  
 
}
