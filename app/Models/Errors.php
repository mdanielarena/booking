<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Errors extends Model
{
    protected $table = 'errors';
    protected $fillable = ['key','methods','results'];
}
