<?php

namespace App\Models;
use App;

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
class slider extends Model
{
    use SoftDeletes;
 	    protected $connection = 'mysql';

    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'link',
 		
        'single_photo',
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
        //'single_photo' => 'min:1|mimes:jpeg,jpg,png,gif',
        //'link' => 'required'
		
		
       'single_photo' => 'mimes:jpeg,jpg,png,gif',
     ];

    
	 
		
		      public function get_slider_description()
{
    $dates = 'ar';
  

if (App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

    return $this->hasMany("App\Models\slider_$dates", 'id_sliders');

		}
		
		
		
		
}
