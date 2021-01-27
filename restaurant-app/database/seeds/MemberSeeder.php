<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'firstName'=>'Billy',
            'lastName'=>'james',
            'email' => 'billy@gmail.com',
            'phone_number'=> '408-321-8987',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('members')->insert([
            'firstName'=>'John',
            'lastName'=>'james',
            'email' => 'john@gmail.com',
            'phone_number'=> '408-245-8074',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('members')->insert([
            'firstName'=>'Jane',
            'lastName'=>'james',
            'email' => 'Jane@gmail.com',
            'phone_number'=> '408-190-1219',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('members')->insert([
            'firstName'=>'janey',
            'lastName'=>'james',
            'email' => 'janey@gmail.com',
            'phone_number'=> '408-290-0129',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('members')->insert([
            'firstName'=>'Smith',
            'lastName'=>'james',
            'email' => 'Smith@gmail.com',
            'phone_number'=> '408-142-8012',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
    }
}
