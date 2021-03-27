<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Verify extends Model
{
    protected $table = 'verifycodes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'app_id', 'ip', 'code', 'domain', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     *
     * protected $hidden = [
     * 'password',
     * ];
     *  */
}
