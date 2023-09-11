<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'rol_id',
        'dato_personal_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    const ADMINISTRADOR = 1;
    const INVITADO = 2;


    public function rol() {
        return $this->belongsTo(Rol::class);
    }
    public function dato_personal() {
        return $this->belongsTo(DatoPersonal::class);
    }
    public function empresa() {
        return $this->belongsTo(Empresa::class);
    }
}