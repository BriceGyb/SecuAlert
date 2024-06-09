<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'identifiant',  // Ajout de 'identifiant' aux champs assignables
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

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }

    /**
     * Boot method for the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Generate unique identifiant before creating a new user
        static::creating(function ($user) {
            $user->identifiant = self::generateUniqueIdentifiant();
        });
    }

    /**
     * Generate a unique identifiant.
     *
     * @return string
     */
    protected static function generateUniqueIdentifiant()
    {
        do {
            $identifiant = Str::random(8);
        } while (self::where('identifiant', $identifiant)->exists());

        return $identifiant;
    }
}


