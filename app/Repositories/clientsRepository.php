<?php

namespace App\Repositories;

use App\Models\clients;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version August 16, 2018, 2:36 pm UTC
 *
 * @method clients findWithoutFail($id, $columns = ['*'])
 * @method clients find($id, $columns = ['*'])
 * @method clients first($columns = ['*'])
*/
class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'slug',
        'single_photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients::class;
    }
}
