<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relación: un usuario tiene muchos proyectos
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    /*
    public function missatges()
    {
        return $this->hasMany(Mensaje::class);
    }
    */
    public function missatgesEnviats()
    {
        return $this->hasMany(Mensaje::class, 'remitente_id');
    }
    public function missatgesRebuts()
    {
        return $this->hasMany(Mensaje::class, 'destinatario_id');
    }
    
}