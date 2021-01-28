<?php

namespace App\Http\Controllers\admin;
use App\GeneralSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    
        return view('admin/food-categories/all',['categories'=>$categories]);
    }
    public function general(){
        $settings = GeneralSetting::find(1);
        return view('admin/settings/general', [
            'settings' => $settings
        ]);
    }

    public function saveGeneralSetting(){
        // return request();
        request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string'],
            'address_2' => [ 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'logo_image_url' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'zip_code' => ['required', 'string']
        ]);

        $category = GeneralSetting::find(1);
        // return $category;
        $category->site_title = request('site_title');
        $category->address_1 = request('address_1');
        $category->address_2 = request('address_2');
        $category->city = request('city');
        $category->state = request('state');
        $category->zip_code = request('zip_code');
        $category->phone_number = request('phone_number');
        $category->logo_image_url = request('log_image_url');
        $category->save();

        return redirect('/admin/settings/general');
    }
}
