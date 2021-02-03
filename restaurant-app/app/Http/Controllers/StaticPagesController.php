<?php

namespace App\Http\Controllers;
use App\Member;
use App\Reservation;
use App\GeneralSetting;
use App\SocialSetting;
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
        
        // $setting = GeneralSetting::find(1);
        // $social = SocialSetting::find(1);
        // return view('menu/index',[
        //     'title'=>$setting->site_title,
        //     'logo'=>$setting->logo_image_url,
        //     'state'=>$setting->state,
        //     'zip'=>$setting->zip_code,
        //     'city'=>$setting->city,
        //     'address1'=>$setting->address_1,
        //     'address2'=>$setting->address_2,
        //     'phone_number'=>$setting->phone_number,
        //     'twitter'=>$social->twitter_url,
        //     'youtube'=>$social->youtube_url,
        //     'instagram'=>$social->instagram_url,
        //     'facebook'=>$social->facebook_url,
        //     ]);
            return view('menu/index');
    }
    
    public function singleMenu(){
        return view ('menu/single-menu');
    }
}
