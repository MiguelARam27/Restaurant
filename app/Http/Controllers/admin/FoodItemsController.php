<?php

namespace App\Http\Controllers\admin;
use App\FoodItem;
use App\FoodCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $item = FoodItem::with('categories')->get();

        return view('admin/food-items/all',['items'=>$item]);
    }
    public function create(){
       
        $categories = FoodCategory::all();
        return view('admin/food-items/create', ['categories'=>$categories]);
    }
    public function store(){

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'image_url'=>['required','mimes:jpg,bmp,png'],
        ]);

        $category_image= request('image_url');
        $product_image_name = $category_image->getClientOriginalName();
        $category_image -> move('uploads/foodItems/', $product_image_name);
     

        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = 'uploads/foodItems/' . $product_image_name;
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

       

        session()->flash('success', request('title') . ' is added as a Food Item');
        
        return redirect('/admin/food-items');
    }
    public function edit($id){
        $item = FoodItem::find($id);
        $categories = FoodCategory::all();
        return view('admin/food-items/edit', [
            'item' => $item,
            'categories'=>$categories
        ]);

    }
    public function update($id){
    
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required','mimes:jpg,bmp,png'],
            'price' => ['required', 'string'],
        ]);
        
        $category_image= request('image_url');
        $product_image_name = $category_image->getClientOriginalName();
        $category_image -> move('uploads/foodItems/', $product_image_name);
     

        $item = FoodItem::find($id);
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = 'uploads/foodItems/' . $product_image_name;
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();

        session()->flash('success', request('title') . ' is Updated');
        return redirect('/admin/food-items');
    }

    public function delete($id){
        $item = FoodItem::find($id);
        $item_title = $item->title;
        $item->delete();


        session()->flash('danger', $item_title . ' is deleted as a Food Item ');
        return redirect('/admin/food-items');
    }
   
}
