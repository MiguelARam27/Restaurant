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
    
        $members =Member::paginate(10);
        return view('admin/members/all-offers-members',['members'=>$members]);
    }

    public function create(){

        return view('admin/members/create');
    }
    public function store(){

        request()->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);
        $member = new Member();
        $member->firstName = request('firstName');
        $member->lastName = request('lastName');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

       
        return redirect('/');
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
        
        $member = Member::find($id);
        $member->firstName = request('firstName');
        $member->lastName = request('lastName');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/admin/members');
    }

    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/members');
    }
}
