<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    protected $table='ubicaion';
    protected $primarykey ='id';
    protected $fillable=[
        'latitud',
        'longitud',
        'referencia',
        'url'
    ];
    public $timestamps=false;
}
