<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table = 'hotels';
    protected $fillable = ['code','name','stars','email','phone','latitude','longitude','address','descriptions','hotel_type','images','destination','country','regions'];
}
