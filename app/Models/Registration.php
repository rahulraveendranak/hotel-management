<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

        
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function user_profile()
    {
        return $this->belongsTo('App\Models\UserProfile','user_id','user_id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room','room_id');
    }

    public function floor()
    {
        return $this->belongsTo('App\Models\Floor','floor_id');
    }

    public function registration_status()
    {
        return $this->belongsTo('App\Models\RegistrationStatus');
    }
}
