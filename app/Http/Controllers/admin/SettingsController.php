<?php

namespace App\Http\Controllers\admin;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        $setting = GeneralSetting::find(1);
        // return $setting;
        $setting->site_title = request('site_title');
        $setting->address_1 = request('address_1');
        $setting->address_2 = request('address_2');
        $setting->city = request('city');
        $setting->state = request('state');
        $setting->zip_code = request('zip_code');
        $setting->phone_number = request('phone_number');
        $setting->logo_image_url = request('log_image_url');
        $setting->save();

        return redirect('/admin/settings/general');
    }

    public function seo(){
        $seo_setting = SeoSetting::find(1);
        return view('admin/settings/seo', [
            'seo_setting' => $seo_setting
        ]);
    }

    public function saveSeo(){
  
        request()->validate([
            'description' => ['required', 'string'],
            'keywords' => ['required', 'string'],
        ]);

        $seo_setting = SeoSetting::find(1);
         $seo_setting->description = request('description');
         $seo_setting->keywords = request('keywords');
         $seo_setting->save();

        return redirect('/admin/settings/seo');
    }
    public function social(){
        
        $social_setting = SocialSetting::find(1);

        return view('admin/settings/social', [
            'social_setting' => $social_setting
        ]);
    }
    public function saveSocial(){

        request()->validate([
            'facebook_url' => ['string'],
            'twitter_url' => ['string'],
            'instagram_url' => ['string'],
            'youtube_url' => ['string'],
            
        ]);

        $social_setting = SocialSetting::find(1);
        $social_setting->facebook_url = request('facebook_url');
        $social_setting->twitter_url = request('twitter_url');
        $social_setting->youtube_url = request('youtube_url');
        $social_setting->instagram_url = request('instagram_url');
        $social_setting->save();

        return redirect('/admin/settings/social');

    }

}
