<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $users = User::with('roles')->get();
        $members =Member::all();
        return view('admin/members/all-offers-members',['members'=>$members]);
    }

    public function create(){

        return view('admin/members/create');
    }
    public function store(){

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'category_id'=>['required','integer']
        ]);
        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
    
        $category->save();

       
        return redirect('/admin/members');
    }
    public function edit($id){
        $member = Member::find($id);
        
        return view('admin/members/edit', [
            'member' => $member
        ]);

    }
    public function update($id){
    
        request()->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);
        
        $category = Member::find($id);
        $category->firstName = request('firstName');
        $category->lastName = request('lastName');
        $category->email = request('email');
        $category->phone_number = request('phone_number');
        $category->save();

        return redirect('/admin/members');
    }

    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    }
}
