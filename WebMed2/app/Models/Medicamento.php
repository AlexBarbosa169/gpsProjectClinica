<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicamento
 * @package App\Models
 * @version February 7, 2018, 11:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection Prescricao
 * @property string Nome
 * @property string Descricao
 * @property string fabricante
 */
class Medicamento extends Model
{

    public $table = 'medicamento';

    public $timestamps = false;

    public $fillable = [
        'Nome',
        'Descricao',
        'fabricante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Nome' => 'string',
        'Descricao' => 'string',
        'fabricante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function prescricaos()
    {
        return $this->hasMany(\App\Models\Prescricao::class);
    }
}
