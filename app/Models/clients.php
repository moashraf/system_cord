<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients
 * @package App\Models
 * @version August 16, 2018, 2:36 pm UTC
 *
 * @property string title
 * @property string body
 * @property string slug
 * @property string single_photo
 */
class clients extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    
 	    protected $connection = 'mysql';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'icon',
        'single_photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'slug' => 'string',
        'single_photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       // 'title' => 'required',
               'single_photo' => 'mimes:jpeg,jpg,png,gif',
        'icon' => 'mimes:jpeg,jpg,png,gif',

    ];

	
	
	   public function get_clients_path()
{
      
  $locale = \App::getLocale(); 
  return   \URL::to($locale.'/clients/').'/'.$this->id;

		}

		
	


		      public function get_clients_description()
{
	
	$dates = 'ar';
  

if (\App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

        return $this->hasMany("App\Models\clients_$dates", 'id_clients');

		}



		
		
		
    
}
