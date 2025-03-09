<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
    {
        use HasFactory;
    
        protected $fillable = ['name', 'description', 'price_per_night'];
    
        public function bookings()
        {
            return $this->hasMany(Booking::class);
        }
    }

