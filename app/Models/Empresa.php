<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'razon_social',
        'encargado',
        'logotipo',
        'direccion',
        'email',
        'telefono',
        'nit'
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
