<?php

namespace App\Repositories;

use App\Models\siteStings;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class siteStingsRepository
 * @package App\Repositories
 * @version April 5, 2018, 11:52 am UTC
 *
 * @method siteStings findWithoutFail($id, $columns = ['*'])
 * @method siteStings find($id, $columns = ['*'])
 * @method siteStings first($columns = ['*'])
*/
class siteStingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return siteStings::class;
    }
}
