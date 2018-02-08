<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Exame
 * @package App\Models
 * @version February 7, 2018, 11:39 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection Prescricao
 * @property string nomeExame
 * @property string descricaoExame
 * @property float valor
 */
class Exame extends Model
{

    public $table = 'exame';

    public $timestamps = false;

    public $fillable = [
        'nomeExame',
        'descricaoExame',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomeExame' => 'string',
        'descricaoExame' => 'string',
        'valor' => 'float'
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
