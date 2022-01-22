<?php

namespace App\Repositories;

use App\Models\SERVICE;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SERVICERepository
 * @package App\Repositories
 * @version August 16, 2018, 2:19 pm UTC
 *
 * @method SERVICE findWithoutFail($id, $columns = ['*'])
 * @method SERVICE find($id, $columns = ['*'])
 * @method SERVICE first($columns = ['*'])
*/
class SERVICERepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'single_photo',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SERVICE::class;
    }
}
