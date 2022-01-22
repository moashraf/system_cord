<?php

namespace App\Repositories;

use App\Models\services_ar;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class services_arRepository
 * @package App\Repositories
 * @version October 2, 2018, 12:17 pm UTC
 *
 * @method services_ar findWithoutFail($id, $columns = ['*'])
 * @method services_ar find($id, $columns = ['*'])
 * @method services_ar first($columns = ['*'])
*/
class services_arRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'single_photo',
        'id_services',
        'description',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return services_ar::class;
    }
}
