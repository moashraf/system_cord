<?php

namespace App\Repositories;

use App\Models\projects;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class projectsRepository
 * @package App\Repositories
 * @version October 29, 2018, 1:49 pm UTC
 *
 * @method projects findWithoutFail($id, $columns = ['*'])
 * @method projects find($id, $columns = ['*'])
 * @method projects first($columns = ['*'])
*/
class projectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'icon',
        'status',
        'services_main_or_children_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return projects::class;
    }
}
