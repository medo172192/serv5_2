<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Moduels\category;
use App\Moduels\post;
use App\Models\Posts\message;
use App\Models\Posts\view\notification;
use App\Models\Posts\view\valuation;
use App\Models\User\follow;
use App\Models\Project;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'src',
        'background',
        'last_name',
        'day',
        'month',
        'year',
        'gender',
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
    ];


    // relationships
    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category(): HasMany
    {
        return $this->hasMany(category::class);
    }
    public function post(): HasMany
    {
        return $this->hasMany(post::class);
    }
    public function message(): HasMany
    {
        return $this->hasMany(message::class);
    }
    public function notification(): HasMany
    {
        return $this->hasMany(notification::class);
    }
    public function valuation(): HasMany
    {
        return $this->hasMany(valuation::class);
    }
    public function follow(): HasMany
    {
        return $this->hasMany(follow::class);
    }

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }


    // JWT
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
}
 