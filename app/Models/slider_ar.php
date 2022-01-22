<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slider
 * @package App\Models
 * @version April 5, 2018, 11:56 am UTC
 *
 * @property string lang
 * @property string single_photo
 * @property string title
 */
class slider_ar extends Model
{
    use SoftDeletes;

    public $table = 'sliders_ar';
    
 	    protected $connection = 'mysqlar';

    protected $dates = ['deleted_at'];


   public $fillable = [
        'status',
 		        'title',
        'id_sliders',
        'description',
        'slug',
      ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lang' => 'string|min:1',
        'single_photo' => 'string|min:3|mimes:jpeg,jpg,png,gif',
        'title' => 'string|min:3'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
	'status' => 'required' ,
 		
        'title' => 'required' ,
        'id_sliders' => 'required' ,
        'description' => 'required' ,
        'slug' => 'required',
        'single_photo' => 'min:1|mimes:jpeg,jpg,png,gif',
        //'link' => 'required'
    ];


    
}
