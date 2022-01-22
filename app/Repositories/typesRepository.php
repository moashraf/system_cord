<?php

namespace App\Repositories;

use App\Models\types;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class typesRepository
 * @package App\Repositories
 * @version August 16, 2018, 12:45 pm UTC
 *
 * @method types findWithoutFail($id, $columns = ['*'])
 * @method types find($id, $columns = ['*'])
 * @method types first($columns = ['*'])
*/
class typesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'single_photo',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return types::class;
    }
}
