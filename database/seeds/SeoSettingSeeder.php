<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description'=>'Bob\'s Burgers is an American animated sitcom created by Loren Bouchard for the Fox Broadcasting Company. The series centers on the Belcher family – parents Bob and Linda and their children Tina, Gene and Louise – who run a hamburger restaurant. The show was conceived by Bouchard after he developed Home Movies',
            'keywords'=>' Burgers, Local Burgers, Bob, Food, Restaurant, Local Food, State Food, American Food',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
    }
}
