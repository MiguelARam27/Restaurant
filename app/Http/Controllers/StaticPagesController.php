<?php

namespace App\Http\Controllers;
use App\Member;
use App\Reservation;
use App\GeneralSetting;
use App\SocialSetting;
use App\FoodCategory;
use App\FoodItem;
use Illuminate\Http\Request;


class StaticPagesController extends Controller
{
    
    public function home(){

        $categories = FoodCategory::all();
        return view('home',[
            'categories'=>$categories
        ]);
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
    public function makeReservation(){

        request()->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'time' => ['required', 'string'],
            'guests_total'=>['required','string']
            
        ]);
        $reservation = new Reservation();
        $reservation->firstName = request('firstName');
        $reservation->lastName = request('lastName');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('time');
        $reservation->guests_total = request('guests_total');
    
        $reservation->save();

       
        return redirect('/reservations/thank-you');
    }
    public function reservation_thanks(){
        return view('pages/reservaton-thanks');
    }

    public function menu(){
        
        $categories = FoodCategory::All(); 
        return view('menu/index',['categories'=>$categories]);
    }
    
    public function singleMenu($slug){
        $foodCategory = FoodCategory::where('title','=',$slug)->first();
        
        $foodItems = FoodItem::where('category_id','=',$foodCategory->id)->get();
        return view ('menu/single-menu',[
            'foodItem'=>ucfirst($slug),
            'foodItems'=> $foodItems
        ]);
    }
}
