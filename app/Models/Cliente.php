<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre_cli
 * @property $apellidopaterno_cli
 * @property $apellidomaterno_cli
 * @property $correo_cli
 * @property $celular_cli
 * @property $direccion_cli
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre_cli' => 'required',
		'apellidopaterno_cli' => 'required',
		'apellidomaterno_cli' => 'required',
		'correo_cli' => 'required',
		'celular_cli' => 'required',
		'direccion_cli' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cli','apellidopaterno_cli','apellidomaterno_cli','correo_cli','celular_cli','direccion_cli'];



}
