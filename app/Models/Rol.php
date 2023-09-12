<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Permiso;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id';

    protected $fillable = ['name'];
    public $timestamps = false;

    const ADMINISTRADOR = 1;
    const INVITADO = 2;

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function permisos()
    {
        return $this->belongsToMany(Permiso::class,'permiso_rol','rol_id','permiso_id')->withPivot('status');
    }
}
