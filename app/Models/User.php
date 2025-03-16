<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
       ,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //when using laravel 9
//     protected function Name(): Attribute
// {
//     return Attribute::make(
//         get: fn($value) => strtoupper($value),
//         set: fn($value) => strtoupper($value),
//     );
// }

//when using laravel 8
public function getNameAttribute($value)
{
    return ucfirst($value);
}



        public function getFirstNameAttribute($value) {
            return strtoupper($value);
        }

        public function setFirstNameAttribute($value)
{
    $this->attributes['first_name'] = strtolower($value);
}


}
