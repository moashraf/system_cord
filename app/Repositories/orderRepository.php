<?php

namespace App\Repositories;

use App\Models\order;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class orderRepository
 * @package App\Repositories
 * @version September 19, 2018, 11:42 am UTC
 *
 * @method order findWithoutFail($id, $columns = ['*'])
 * @method order find($id, $columns = ['*'])
 * @method order first($columns = ['*'])
*/
class orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'email',
        'phone',
        'status',
        'product'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return order::class;
    }
}
