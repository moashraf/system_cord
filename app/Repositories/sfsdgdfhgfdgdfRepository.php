<?php

namespace App\Repositories;

use App\Models\sfsdgdfhgfdgdf;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class sfsdgdfhgfdgdfRepository
 * @package App\Repositories
 * @version October 2, 2018, 12:01 pm UTC
 *
 * @method sfsdgdfhgfdgdf findWithoutFail($id, $columns = ['*'])
 * @method sfsdgdfhgfdgdf find($id, $columns = ['*'])
 * @method sfsdgdfhgfdgdf first($columns = ['*'])
*/
class sfsdgdfhgfdgdfRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'single_photo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return sfsdgdfhgfdgdf::class;
    }
}
