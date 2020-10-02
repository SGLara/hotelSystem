<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $guarded = [
        'country_id'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function hotels(){
        return $this->hasMany(Hotel::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
