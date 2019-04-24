<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use SoftDeletes;
    protected $fillable = ['width', 'height'];

    public function books()
    {
        return $this->hasMany('App\Book');
    }
//    public function magazines()
//    {
//        return $this->hasMany('App\Magazine');
//    }
}
