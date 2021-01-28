<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;


class StaticPagesController extends Controller
{
    
    public function home(){
        return view('home');
    }
    public function about(){
        return view('pages/about');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }
    public function registerMember(){

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

        return redirect('/offers/thank-you');
    }
    public function thank_you(){
        return view('pages/thank-you');
    }
    
    public function reservations(){
        return view('pages/reservations');
    }

    public function menu(){
        return view('menu//index');
    }
    public function singleMenu(){
        return view('menu/single-menu');
    }
}
