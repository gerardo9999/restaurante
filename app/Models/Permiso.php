<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permisos';
    protected $primaryKey = 'id';

    protected $fillable = ['name','description'];
    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Rol::class,'permiso_rol','permiso_id','rol_id')->withPivot('status');
    }
}
