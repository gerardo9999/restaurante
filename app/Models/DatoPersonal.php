<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatoPersonal extends Model
{
    use HasFactory;
    protected $table = 'datos_personales';

    protected $fillable = [
        'nombres',
        'apellidos',
        'ci',
        'telefono',
        'direccion',
        'fecha_nacimiento',
    ];
    public $timestamps = false;
    
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
