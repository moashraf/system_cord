<?php

namespace App\Repositories;

use App\Models\request;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class requestRepository
 * @package App\Repositories
 * @version September 23, 2018, 8:47 am UTC
 *
 * @method request findWithoutFail($id, $columns = ['*'])
 * @method request find($id, $columns = ['*'])
 * @method request first($columns = ['*'])
*/
class requestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'body',
        'email',
        'phone',
        'product',
        'quantity',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return request::class;
    }
}
