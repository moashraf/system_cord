<?php

namespace App\Repositories;

use App\Models\services;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class servicesRepository
 * @package App\Repositories
 * @version October 2, 2018, 11:56 am UTC
 *
 * @method services findWithoutFail($id, $columns = ['*'])
 * @method services find($id, $columns = ['*'])
 * @method services first($columns = ['*'])
*/
class servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_by',
        'last_updated_by',
        'id_category',
        'single_photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return services::class;
    }
}
