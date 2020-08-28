<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class precio extends Model
{
    protected $table = 'precios';
    protected $primaryKey ='id';
    protected $fillable = [
        'fecha',
        'precio',
        'idProducto',
    ];
    public $timestamps=false;
}
