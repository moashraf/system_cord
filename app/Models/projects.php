<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class projects
 * @package App\Models
 * @version October 29, 2018, 1:49 pm UTC
 *
 * @property string image
 * @property string icon
 * @property string status
 * @property string services_main_or_children_id
 */
class projects extends Model
{
    use SoftDeletes;

    public $table = 'Source';
    protected $connection ='mysql';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
	     'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'string',
        'icon' => 'string',
        'status' => 'string',
        'services_main_or_children_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
     //  'image' => 'mimes:jpeg,jpg,png,gif',
      //  'icon' => 'mimes:jpeg,jpg,png,gif',   
    ];

    
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	 public function get_projects_path()
{
      
  $locale = \App::getLocale(); 
  return   \URL::to($locale.'/projects/').'/'.$this->id;

		}


	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		
		 public function get_projects_Photos()
    {
        return $this->hasMany('App\Models\all_models_photos', 'all_Models_id');

    }
	
	
	
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 public function get_projects_description()
{
	
	$dates = 'ar';
  

if (\App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

        return $this->hasMany("App\Models\projects_$dates", 'id_projects');

		}

			////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



		
   		  public function get_all_data_of_Source ()
    {
        return $this->hasMany('App\Models\NEWS', 'Source_id');

    }
 
}
