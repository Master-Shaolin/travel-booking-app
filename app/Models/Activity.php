<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
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
        'country',
        'city',
        'thumbnail',
        'photos',
        'language',
        'duration',
        'included',
        'accessibility',
        'pets',
        'rating',
        'meeting_point',
        'active',
        'featured',
        'user_id'
    ];

    // Relationship With Activity Reservations
    public function reservations() {
        return $this->hasMany(ActivityReservation::class, 'activity_id');
    }
}
