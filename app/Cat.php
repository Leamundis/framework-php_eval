<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    public static function getOneCat($id)
    {
        return Cat::find($id);
    }
}
