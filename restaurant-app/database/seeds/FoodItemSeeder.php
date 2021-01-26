<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;
class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title'=>'Texas Burger',
            'price'=>9.99,
            'description'=>'lettuce tomato, bbq sauce',
            'image_url'=> '/img/CHIPS.png',
            'category_id'=>'2',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'BBQ Burger',
            'price'=>5.99,
            'description'=>'lettuce tomato, bbq sauce',
            'image_url'=> '/img/CHIPS.png',
            'category_id'=>'2',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'American Burger',
            'price'=>9.99,
            'description'=>'lettuce tomato, bbq sauce',
            'image_url'=> '/img/CHIPS.png',
            'category_id'=>'2',
            'updated_at'=> Carbon::now(),
            'created_at'=>Carbon::now()
        ]);
    }
}
