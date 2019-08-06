<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Users extends Eloquent implements
AuthorizableContract,
AuthenticatableContract,
CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
    protected $collection = "users";
}
