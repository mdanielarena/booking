<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotelAvailabilityApi extends Model
{
    protected $table = 'hotel_availability';
    protected $fillable = ['key','results'];
}
