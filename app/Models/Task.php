<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcio',
        'completada',
        'project_id'
    ];

    protected $casts = [
        'completada' => 'boolean', // convierte tinyInteger a booleano
    ];

    // Relación con Project (inversa)
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}