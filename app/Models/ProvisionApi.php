<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvisionApi extends Model
{
    protected $table = 'provision';
    protected $fillable = ['key','results'];
}
