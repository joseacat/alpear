<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Tabla usada para los usuarios
     * @var string
     */
    protected $table = "usuarios";

    /**
     * Atributos que se puede editar
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * Atributos ocultos
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
