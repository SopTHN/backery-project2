<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class users extends Model
{
    use HasFactory;

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }
    
    protected $fillable = ['Cart', 'name', 'user_email', 'password'];

    protected $casts = [
        'Cart' => 'array'
    ];
}
