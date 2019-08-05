<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {
    use Notifiable;

    protected $connection="mongodb";

    protected $fillable = [
        'name','email','password'
    ];
}
