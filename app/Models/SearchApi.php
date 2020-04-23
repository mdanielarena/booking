<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchApi extends Model
{
    protected $table = 'search';
    protected $fillable = ['key','results'];
}
