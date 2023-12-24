<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    use HasFactory;
    protected $table = 'seat_allocations';
    protected $fillable = ['trip_id','passenger_name', 'passenger_phone','total_seat'];
}
