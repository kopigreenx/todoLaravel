<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Todo extends Eloquent
{

    protected $connection = "mongodb";
    protected $collection = "users_todo";

    protected $fillable = [
        'email', 'description', 'confirmed'
    ];

}
