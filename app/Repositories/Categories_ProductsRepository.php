<?php

namespace App\Repositories;

use App\Models\Categories_Products;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Categories_ProductsRepository
 * @package App\Repositories
 * @version April 5, 2018, 11:45 am UTC
 *
 * @method Categories_Products findWithoutFail($id, $columns = ['*'])
 * @method Categories_Products find($id, $columns = ['*'])
 * @method Categories_Products first($columns = ['*'])
*/
class Categories_ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'lang',
        'single_photo',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categories_Products::class;
    }
}
