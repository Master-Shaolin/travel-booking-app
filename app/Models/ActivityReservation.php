<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityReservation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'approved',
        'alert',
        'activity_id',
        'user_id'
    ];

    // Relationship to Activity
    public function activity() {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
