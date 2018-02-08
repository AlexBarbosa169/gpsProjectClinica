<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Consulta
 * @package App\Models
 * @version February 7, 2018, 11:38 pm UTC
 *
 * @property \App\Models\Medico medico
 * @property \App\Models\Paciente paciente
 * @property \Illuminate\Database\Eloquent\Collection Prescricao
 * @property date dataConsulta
 * @property integer idPaciente
 * @property integer idMedico
 * @property string descricaoConsulta
 */
class Consulta extends Model
{


    public $table = 'consulta';


    public $timestamps = false;


    public $fillable = [
        'dataConsulta',
        'idPaciente',
        'idMedico',
        'descricaoConsulta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dataConsulta' => 'date',
        'idPaciente' => 'integer',
        'idMedico' => 'integer',
        'descricaoConsulta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\Medico::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function prescricaos()
    {
        return $this->hasMany(\App\Models\Prescricao::class);
    }
}
