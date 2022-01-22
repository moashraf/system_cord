<?php

namespace App\Models;
use App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services
 * @package App\Models
 * @version October 2, 2018, 11:56 am UTC
 *
 * @property integer created_by
 * @property integer last_updated_by
 * @property integer id_category
 * @property string single_photo
 */
class services extends Model
{
 	    protected $connection = 'mysql';

    public $table = 'services';
    

 use SoftDeletes;

     

    protected $dates = ['deleted_at'];
	
  public $fillable = [
        'single_photo',
        'cat_id',
        'tag_id',
        'icon',
     ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_by' => 'integer',
        'last_updated_by' => 'integer',
         'single_photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
 
		
       'single_photo' => 'mimes:jpeg,jpg,png,gif',
       // 'icon' => 'mimes:jpeg,jpg,png,gif',   
    ];

	
	
		  public function get_services_Photos()
    {
        return $this->hasMany('App\Models\services_photo', 'services_id');

    }
		
	
	public function parent_category() {
        return $this->belongsTo(self::class, 'services_main_or_children_id', 'id');
    }

    public function children() {
        return $this->hasMany(self::class, 'services_main_or_children_id');
    }
	
	
	
 
	   public function get_services_path()
{
   
  
  $locale = App::getLocale();
   $NEWS = services::with('get_services_description')->where('id', $this->id)->get();
  
         return \URL::to($locale.'/singel_services/').'/' .$NEWS[0]->get_services_description[0]->slug.'/'.$this->id ;




		}

		
  

		
		      public function get_services_description()
{
	
	$dates = 'ar';
  

if (App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

        return $this->hasMany("App\Models\services_$dates", 'id_services');

		}
		
		
   		  public function get_all_data_of_service_type ()
    {
        return $this->hasMany('App\Models\NEWS', 'service_id');

    }
 
	

}
