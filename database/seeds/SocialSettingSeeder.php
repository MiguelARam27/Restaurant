<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url'=>"https://www.facebook.com",
            'twitter_url'=>'https://www.twitter.com',
            'youtube_url'=>' https://www.youtube.com',
            'instagram_url'=>' https://www.instagram.com',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
    }
}
