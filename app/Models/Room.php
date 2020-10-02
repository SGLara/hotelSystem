<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'max_ocuppancy',
    ];

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    // CHECK HOW I CAN ADD THIS RELATIONSHIP
    // public function room(){
    //     return $this->belongsTo(Reservation::class);
    // }
}
