<?php
use Illuminate\Database\Seeder;
use Carbon\carbon;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('reservations')->insert([
            'firstName'=>'Billy',
            'lastName'=>'james',
            'email' => 'billy@gmail.com',
            'phone_number'=> '408-321-8987',
            'guests_total'=>2,
            'time'=>9,
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
         DB::table('reservations')->insert([
            'firstName'=>'baily',
            'lastName'=>'jane',
            'email' => 'baily@gmail.com',
            'phone_number'=> '407-198-1021',
            'guests_total'=>2,
            'time'=>9,
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
         DB::table('reservations')->insert([
            'firstName'=>'Johyn',
            'lastName'=>'andres',
            'email' => 'Gamer1@gmail.com',
            'phone_number'=> '091-198-9982',
            'guests_total'=>2,
            'time'=>9,
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
         DB::table('reservations')->insert([
            'firstName'=>'Sam',
            'lastName'=>'Smith',
            'email' => 'Sam@gmail.com',
            'phone_number'=> '408-321-1492',
            'guests_total'=>2,
            'time'=>9,
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
         DB::table('reservations')->insert([
            'firstName'=>'Billy',
            'lastName'=>'james',
            'email' => 'billy@gmail.com',
            'phone_number'=> '408-321-1324',
            'guests_total'=>2,
            'time'=>9,
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
    }
}
