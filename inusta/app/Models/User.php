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
        'name',
        'email',
        'password',
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

    public function posts() 
    {
        return $this->hasMany(Post::class);
    }

    public function post_comments() 
    {
        return $this->hasMany(PostComment::class);
    }

    public function questions() 
    {
        return $this->hasMany(Question::class);
    }

    public function question_comments() 
    {
        return $this->hasMany(Questioncomment::class);
    }

    public function dogs() 
    {
        return $this->hasMany(Dog::class);
    }

    public function bookmarks() 
    {
        return $this->belongsToMany(Post::class, 'bookmarks')->withTimestamps();
    }
}