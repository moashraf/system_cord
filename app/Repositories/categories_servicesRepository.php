<?php

namespace App\Repositories;

use App\Models\categories_services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class categories_servicesRepository
 * @package App\Repositories
 * @version March 25, 2019, 11:58 am UTC
 *
 * @method categories_services findWithoutFail($id, $columns = ['*'])
 * @method categories_services find($id, $columns = ['*'])
 * @method categories_services first($columns = ['*'])
*/
class categories_servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'single_photo',
        'status',
        'parentid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return categories_services::class;
    }
}
