<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $casts = [
        'birthday' => 'date:Y-m-d',
    ];

    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn($_, $attributes) => $attributes['first_name'] . ' ' . $attributes['last_name'],
        );
    }

    public function age(): Attribute
    {
        return Attribute::make(
            get: fn($_, $attributes) => Carbon::parse($attributes['birthday'])->age,
        );
    }
}
