<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newspaper extends Model
{
    use SoftDeletes;
    protected $fillable = ['price', 'subscriptionPrice', 'title', 'pages', 'publisher', 'year', 'number', 'numsPerYear', 'isColor', 'size_id'];
}
