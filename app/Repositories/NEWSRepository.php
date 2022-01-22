<?php

namespace App\Repositories;

use App\Models\NEWS;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NEWSRepository
 * @package App\Repositories
 * @version August 16, 2018, 2:22 pm UTC
 *
 * @method NEWS findWithoutFail($id, $columns = ['*'])
 * @method NEWS find($id, $columns = ['*'])
 * @method NEWS first($columns = ['*'])
*/
class NEWSRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'single_photo',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NEWS::class;
    }
}
