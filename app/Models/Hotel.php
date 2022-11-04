<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
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
        'legal_representative',
        'phone',
        'country',
        'city',
        'address',
        'photos',
        'rating',
        'active',
        'featured',
        'hotel_type_id',
        'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'photos' => 'array',
    ];

    // Relationship With Rooms
    public function rooms() {
        return $this->hasMany(Room::class, 'hotel_id');
    }

    // Relationship With Hotel Type
    public function type() {
        return $this->hasOne(HotelType::class);
    }
}
