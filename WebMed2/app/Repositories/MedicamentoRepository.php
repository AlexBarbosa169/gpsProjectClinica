<?php

namespace App\Repositories;

use App\Models\Medicamento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MedicamentoRepository
 * @package App\Repositories
 * @version February 7, 2018, 11:39 pm UTC
 *
 * @method Medicamento findWithoutFail($id, $columns = ['*'])
 * @method Medicamento find($id, $columns = ['*'])
 * @method Medicamento first($columns = ['*'])
*/
class MedicamentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nome',
        'Descricao',
        'fabricante'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Medicamento::class;
    }
}
