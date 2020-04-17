<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SearchKey extends Model
{
    protected $table = 'search_keys';
    protected $fillable = ['key','code','name','type','pax','checkin','checkout'];
}
