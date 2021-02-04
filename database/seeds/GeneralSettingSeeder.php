<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title'=>'Bob\'s Burger\'s',
            'logo_image_url'=>'/img/logo.png',
            'address_1'=>' 5120 S Conway Rd',
            'phone_number'=> '407-288-65xx',
            'address_2'=>'',
            'city'=>'Orlando',
            'zip_code'=>'32812',
            'state'=>'FL',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()

        ]);
    }
}
