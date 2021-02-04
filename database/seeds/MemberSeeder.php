<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
use Faker\Factory as faker;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('members')->insert([
                'firstName'=>$faker->firstName,
                'lastName'=>$faker->lastName,
                'email' => $faker->email,
                'phone_number'=> $faker->phoneNumber,
                'updated_at'=> Carbon::now(),
                'created_at'=>Carbon::now()
            ]);
        }
   
    }
}
