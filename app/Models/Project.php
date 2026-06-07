<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'descripcio',
        'data_ini',
        'data_fi',
        'user_id'
    ];

    protected $casts = [
        'data_ini' => 'date',
        'data_fi' => 'date',
    ];

    // Relación con User (inversa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con Task (uno a muchos)
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}