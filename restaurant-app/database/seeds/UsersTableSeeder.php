<?php

use Illuminate\Database\Seeder;

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
        ]);
        DB::table('users')->insert([
            'firstName'=>'Sindy',
            'lastName'=>'Johnson',
            'email' => 'Sindy@gmail.com',
            'password'=> Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'firstName'=>'Johnny',
            'lastName'=>'raiz',
            'email' => 'Johnny@gmail.com',
            'password'=> Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'firstName'=>'Mike',
            'lastName'=>'raiz',
            'email' => 'Mike@gmail.com',
            'password'=> Hash::make('123456'),
        ]);
    }
}
