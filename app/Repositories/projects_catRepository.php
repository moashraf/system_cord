<?php

namespace App\Repositories;

use App\Models\projects_cat;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class projects_catRepository
 * @package App\Repositories
 * @version September 19, 2018, 11:46 am UTC
 *
 * @method projects_cat findWithoutFail($id, $columns = ['*'])
 * @method projects_cat find($id, $columns = ['*'])
 * @method projects_cat first($columns = ['*'])
*/
class projects_catRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return projects_cat::class;
    }
}
