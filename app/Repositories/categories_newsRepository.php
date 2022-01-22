<?php

namespace App\Repositories;

use App\Models\categories_news;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class categories_newsRepository
 * @package App\Repositories
 * @version February 13, 2019, 1:09 pm UTC
 *
 * @method categories_news findWithoutFail($id, $columns = ['*'])
 * @method categories_news find($id, $columns = ['*'])
 * @method categories_news first($columns = ['*'])
*/
class categories_newsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parentid',
        'single_photo',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return categories_news::class;
    }
}
