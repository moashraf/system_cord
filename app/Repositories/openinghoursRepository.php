<?php

namespace App\Repositories;

use App\Models\openinghours;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class openinghoursRepository
 * @package App\Repositories
 * @version October 16, 2018, 1:14 pm UTC
 *
 * @method openinghours findWithoutFail($id, $columns = ['*'])
 * @method openinghours find($id, $columns = ['*'])
 * @method openinghours first($columns = ['*'])
*/
class openinghoursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'day',
        'time',
        'Note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return openinghours::class;
    }
}
