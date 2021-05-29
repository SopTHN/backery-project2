<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;
    
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }
}
