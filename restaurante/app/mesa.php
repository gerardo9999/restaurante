<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    protected $table = 'mesa';
    protected $primaryKey ='id';
    protected $fillable = [
        'capacidad',
        'descripcion',
        'ocupacion',
        'ubicacion'
    ];
    public $timestamps=false;
}
