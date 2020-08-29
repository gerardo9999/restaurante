<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'producto';
    protected $primaryKey ='id';
    protected $fillable = [
        'fecha',
        'fechaentrega',
        'horaentrega',
        'glosa',
        'montototal',
        'repartidor',
        'estado',
        'idUsuario',
        'idCliente',
        'idRepartiddor',
        'idUbicacion'    ];
    public $timestamps=false;
}
