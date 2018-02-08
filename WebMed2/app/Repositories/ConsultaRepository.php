<?php

namespace App\Repositories;

use App\Models\Consulta;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsultaRepository
 * @package App\Repositories
 * @version February 7, 2018, 11:38 pm UTC
 *
 * @method Consulta findWithoutFail($id, $columns = ['*'])
 * @method Consulta find($id, $columns = ['*'])
 * @method Consulta first($columns = ['*'])
*/
class ConsultaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dataConsulta',
        'idPaciente',
        'idMedico',
        'descricaoConsulta'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Consulta::class;
    }
}
