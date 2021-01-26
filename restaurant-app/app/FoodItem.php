<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{

    protected $table = 'food_items';
    
    public function categories(){
        return $this->belongsTo('App\FoodCategory');
    }
}
