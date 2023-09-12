<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PermisoRol extends Pivot
{
    protected $table = 'permiso_rol';
    protected $primaryKey = ['permiso_id','rol_id'];

    public $timestamps = false;

    protected $fillable = [
        'status'
    ];
}
