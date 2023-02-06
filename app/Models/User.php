<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'imagen',//campo para guardar nombre de imagen de perfil
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * relacion con publicacion
     * publicacion creadas por el usuario
     */
    public function publicacion()
    {
        return $this->hasMany(Publicacion::class);
    }

    /**
     * like que alla dado
    */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * ALMACENA LOS SEGUIDORES DE UN USUARIO
    */
    public function followers()
    {
        return $this->belongsToMany(User::class,'followers','user_id','follower_id');
    }

    /**
     * ALMACENA LOS SEGUIDOS
    */
    public function followings()
    {
        return $this->belongsToMany(User::class,'followers','follower_id','user_id');
    }

    /**
     * COMPRUEBA SI UN USUARIO YA SIGUE A OTRO
    */
    public function siguiendo(User $user)
    {
        return $this->followers->contains($user->id);
    }

}
