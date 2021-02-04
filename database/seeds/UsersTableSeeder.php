<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
use Faker\factory as faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName'=>'Billy',
            'lastName'=>'james',
            'email' => 'billy@gmail.com',
            'password'=> Hash::make('123456'),
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'firstName'=>'Miguel',
            'lastName'=>'Ramirez',
            'email' => 'colotor27@gmail.com',
            'password'=> Hash::make('Salt2020@'),
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('users')->insert([
                'firstName'=>$faker->firstName,
                'lastName'=>$faker->lastName,
                'email' => $faker->email,
                'password'=> Hash::make('12345678'),
                'updated_at'=> $faker->dateTimeThisMonth,
                'created_at'=>$faker->dateTimeThisMonth,
            ]);
        }
    }
}
