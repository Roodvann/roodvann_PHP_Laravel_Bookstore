<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Magazine extends Model
{
    use SoftDeletes;
    protected $fillable = ['price', 'subscriptionPrice', 'title', 'pages', 'publisher', 'year', 'number', 'numsPerYear', 'size_id'];

//    function reserve () {
//        echo "Function reserve() is called!";
//    }
//    // функція getPrice(float):float - отримує розмір знижки (у%) і повертає суму з її урахуванням
//    public function getPrice($discountValue) {
//        $resultDiscount = ($this->price * $discountValue) / 100;
//        return "The function getPrice($discountValue) is called for class " . get_class($this) . ": " .  ($this->price - $resultDiscount);
//    }
//
//    public function size()
//    {
//        return $this->belongsTo('App\Size');
//    }
//
//    public function books()
//    {
//        return $this->belongsToMany('App\Magazine');
//    }

}
