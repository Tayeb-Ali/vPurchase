<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebLog extends Model
{
    protected $table = 'web_logs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'log_content', 'domain'
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
