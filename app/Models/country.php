<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class openinghours
 * @package App\Models
 * @version October 16, 2018, 1:14 pm UTC
 *
 * @property string day
 * @property string time
 * @property string Note
 */
class country extends Model
{
    use SoftDeletes;

    public $table = 'country';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'iso',
        'name',
        'iso3',
        'numcode',
        'phonecode',
        'nicename'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'day' => 'string',
        'time' => 'string',
        'Note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'day' => 'required',
        'Note' => 'required',
        'time' => 'required'
    ];

    
}
