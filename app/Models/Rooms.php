<?php

namespace App\Models;

use App\Models\RoomImages;
use App\Models\RoomReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomId',
        'descriptions'
    ];

    /**
     * Get all of the comments for the Rooms
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomReviews()
    {
        return $this->hasOne(RoomReview::class, 'roomId');
    }

    public function roomImages()
    {
        return $this->hasOne(RoomImages::class, 'roomId');
    }
}