<?php
/**
 * Created by PhpStorm.
 * User: Serhii
 * Date: 30.09.2018
 * Time: 13:39
 */

namespace App;


trait Selectable
{
    public static function getSelectList($value = 'price', $key = 'id'){
        return static::latest()->pluck($value, $key);
    }
}