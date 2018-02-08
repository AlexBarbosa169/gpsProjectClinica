<?php

namespace App\Repositories;

use App\Models\Exame;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExameRepository
 * @package App\Repositories
 * @version February 7, 2018, 11:39 pm UTC
 *
 * @method Exame findWithoutFail($id, $columns = ['*'])
 * @method Exame find($id, $columns = ['*'])
 * @method Exame first($columns = ['*'])
*/
class ExameRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomeExame',
        'descricaoExame',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Exame::class;
    }
}
