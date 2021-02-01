<?php
use Illuminate\Database\Seeder;


use Carbon\carbon;
use Faker\factory as faker;
class ReservationSeeder extends Seeder
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
            DB::table('reservations')->insert([
                'firstName'=>$faker->firstName,
                'lastName'=>$faker->lastName,
                'email' => $faker->email,
                'phone_number'=> $faker->phoneNumber,
                'guests_total'=> rand(1,5),
                'time'=>rand(6,10),
                'updated_at'=> Carbon::now(),
                'created_at'=>Carbon::now()
            ]);
        }
    }
}
