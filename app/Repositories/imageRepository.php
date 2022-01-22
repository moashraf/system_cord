<?php

namespace App\Repositories;

use App\Models\image;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class imageRepository
 * @package App\Repositories
 * @version September 27, 2018, 10:38 am UTC
 *
 * @method image findWithoutFail($id, $columns = ['*'])
 * @method image find($id, $columns = ['*'])
 * @method image first($columns = ['*'])
*/
class imageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'single_photo',
        'type',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return image::class;
    }
}
