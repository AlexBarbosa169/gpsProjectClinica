<?php

namespace App\Repositories;

use App\Models\Prescricao;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrescricaoRepository
 * @package App\Repositories
 * @version February 7, 2018, 11:40 pm UTC
 *
 * @method Prescricao findWithoutFail($id, $columns = ['*'])
 * @method Prescricao find($id, $columns = ['*'])
 * @method Prescricao first($columns = ['*'])
*/
class PrescricaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idConsulta',
        'idMedicamento',
        'idExame',
        'Comentario'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prescricao::class;
    }
}
