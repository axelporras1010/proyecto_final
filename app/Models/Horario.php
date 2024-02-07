<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profesor_id',
        'dia_semana',
        'descripcion',
        'hora_inicio',
        'hora_fin',
    ];

    // Asumiendo que tienes una relación entre horarios y profesores
    public function profesor()
    {
        return $this->belongsTo(User::class, 'profesor_id');
    }
}
