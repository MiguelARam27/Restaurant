<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
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
            'firstName'=>'Sindy',
            'lastName'=>'Johnson',
            'email' => 'Sindy@gmail.com',
            'password'=> Hash::make('123456'),
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'firstName'=>'Johnny',
            'lastName'=>'raiz',
            'email' => 'Johnny@gmail.com',
            'password'=> Hash::make('123456'),
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'firstName'=>'Mike',
            'lastName'=>'raiz',
            'email' => 'Mike@gmail.com',
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
    }
}
