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
            'address_1'=>' 234 Main st,',
            'phone_number'=> 'xxx-xxx-xxxx',
            'address_2'=>'',
            'city'=>'kissimmee',
            'zip_code'=>'34741',
            'state'=>'FL',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()

        ]);
    }
}
