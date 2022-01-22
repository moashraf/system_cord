<?php

namespace App\Repositories;

use App\Models\Products;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductsRepository
 * @package App\Repositories
 * @version April 5, 2018, 10:54 am UTC
 *
 * @method Products findWithoutFail($id, $columns = ['*'])
 * @method Products find($id, $columns = ['*'])
 * @method Products first($columns = ['*'])
*/
class ProductsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'body',
        'single_photo',
        'photos_id',
        'component',
        'Net_weight',
        'Note',
        'Packing_content',
        'cat_id',
        'lang',
        'slug'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Products::class;
    }
}
