<?php

namespace App\Repositories;

use App\Models\slider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class sliderRepository
 * @package App\Repositories
 * @version April 5, 2018, 11:56 am UTC
 *
 * @method slider findWithoutFail($id, $columns = ['*'])
 * @method slider find($id, $columns = ['*'])
 * @method slider first($columns = ['*'])
*/
class sliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lang',
        'single_photo',
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return slider::class;
    }
}
