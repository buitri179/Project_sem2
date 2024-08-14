<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_title',
        'image',
        'description',
        'price',
        'wifi',
        'room_type',
        'capacity_adults',
        'capacity_children',

    ];

    // Quan hệ với bảng bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
