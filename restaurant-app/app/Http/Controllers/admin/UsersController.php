<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users = User::paginate(10);
        return view('admin/users/all',['users'=>$users]);
    }
    public function create(){
        $roles = Role::all();
        return view('admin/users/create', ['roles'=>$roles]);
    }
    public function store(){

        $user = new User();

        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        $user->roles()->attach(request('role_id'));
        return redirect('/admin/users');
    }
    public function edit($id){
    
    // request()->validate([
        //     'firstName' => ['required', 'string', 'max:255'],
        //     'lastName' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'role_id' => ['required'],
        // ]);

        $user = User::find($id);
        $roles = Role::all();
        return view('admin/users/edit',
        [
        'user'=>$user,
        'roles'=>$roles
        ]);
    }
    public function update($id){
    
        request()->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'confirmed'],
            'role_id' => ['required'],
        ]);

        $user = User::find($id);
        $user->firstName = request('firstName');
        $user->lastName = request('lastName');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $user->roles()->sync([request('role_id')]);

        return redirect('/admin/users');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }
    
}
