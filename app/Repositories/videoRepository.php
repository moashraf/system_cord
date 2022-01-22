<?php

namespace App\Repositories;

use App\Models\video;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class videoRepository
 * @package App\Repositories
 * @version September 27, 2018, 10:35 am UTC
 *
 * @method video findWithoutFail($id, $columns = ['*'])
 * @method video find($id, $columns = ['*'])
 * @method video first($columns = ['*'])
*/
class videoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'single_photo',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return video::class;
    }
}
