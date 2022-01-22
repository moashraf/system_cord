<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class siteStings
 * @package App\Models
 * @version April 5, 2018, 11:52 am UTC
 *
 * @property string key
 * @property string value
 * @property string lang
 */
class siteStings_ar extends Model
{
    use SoftDeletes;

    public $table = 'site_stings_ar';
    	    protected $connection = 'mysqlar';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'key',
        'value',
        'lang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'key' => 'string',
        'value' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
     //   'key' => 'required',
        'value' => 'required',
      //  'lang' => 'required'
    ];

    
}
