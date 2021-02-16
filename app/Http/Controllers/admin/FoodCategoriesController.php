<?php

namespace App\Http\Controllers\admin;
use App\FoodCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Validator;
class FoodCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $categories = FoodCategory::paginate(10); 
       

        return view('admin/food-categories/all')->with('categories',$categories);
    }
    public function create(){

        return view('admin/food-categories/create');
    }
    public function store(){

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required','mimes:jpg,bmp,png'],
        ]);
        
        $category_image= request('image');
        $product_image_name = $category_image->getClientOriginalName();
        $category_image -> move('uploads/categories/', $product_image_name);

        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image = 'uploads/categories/' . $product_image_name;
    
        $category->save();

        session()->flash('success', request('title') . '  Category Added');
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
            'image' => ['mimes:jpg,bmp,png'],
        ]);
        $category = FoodCategory::find($id);
        if(request('image')){
            $category_image= request('image');
            $product_image_name = $category_image->getClientOriginalName();
            $category_image -> move('uploads/categories/', $product_image_name);
            $category->image = 'uploads/categories/' . $product_image_name;
           
        }
        $category->title = request('title');
        $category->description = request('description');
        $category->save();
        session()->flash('success', request('title') . ' is Updated');
        return redirect('/admin/food-categories')->send('success','Category Created');
    }

    public function delete($id){
        $category = FoodCategory::find($id);
        $category_title =$category->title;
        $category->delete();


        session()->flash('danger', $category_title . '  Category Deleted');
        return redirect('/admin/food-categories');
    }
  
 
}
