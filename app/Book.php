<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //use Selectable;
    use SoftDeletes;
    protected $fillable = ['price', 'title', 'author', 'pages', 'publisher', 'year', 'hardcover', 'size_id'];
    //

    // функція getGenres():string - повертає вміст genres у вигляді рядка, значення розділені комою
//    public function getGenres() {
//        $stringResult = explode("," , $this->genres . "<br>");
//
//        $arrayResult = implode("," , $stringResult );
//        return "The function <strong>getGenres()</strong> is called for class " . get_class($this) . ": " . $arrayResult. "<br>";
//    }

    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
}
