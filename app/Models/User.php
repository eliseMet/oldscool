<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pseudo',
        'lastname',
        'firstname',
        'phone_number',
        'birthday',
        'email',
        'password',
        'image_id',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    // Creation d'un attribute profileImage ($user->profileImage)
    public function getProfileImageAttribute()
    {
        // Cette atribute retourne la photo de profile d'un user
        $image = Image::join('default_profile_images', 'default_profile_images.image_id', '=', 'images.id')
            ->where('default_profile_images.id', $this->image_id)
            ->first();
        return $image;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
