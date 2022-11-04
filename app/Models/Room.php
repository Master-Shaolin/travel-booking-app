<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'max_people',
        'photos',
        'beds',
        'rating',
        'active',
        'hotel_id'
    ];

    // Relationship to Hotel
    public function hotel() {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    // Relationship With Room Reservations
    public function reservations() {
        return $this->hasMany(RoomReservation::class, 'room_id');
    }
}
