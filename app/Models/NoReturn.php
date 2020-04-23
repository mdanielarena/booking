<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoReturn extends Model
{
    protected $table = 'api_no_return';
    protected $fillable = ['key','methods','results'];
}
