<?php

namespace App\Models;
use App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class types
 * @package App\Models
 * @version August 16, 2018, 12:45 pm UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string slug
 */
class post_Comment extends Model
{
    use SoftDeletes;

    public $table = 'post_Comment';
     	    protected $connection = 'mysql';


    protected $dates = ['deleted_at'];


    public $fillable = [
       
        'title',
        'body',
        'id_new_Comment',
       
		 
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'single_photo' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
	
	      // 'single_photo' => 'mimes:jpeg,jpg,png,gif',
         //  'single_photo' => 'required',
     ];
     
     
     
	  public function get_doc_path()
{$locale = App::getLocale();
          return   \URL::to($locale.'/Doctors/').'/'.$this->id;

		}

		
		
		  public function get_types_description()
{
 	$dates = 'ar';
  

if (App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}



        return $this->hasMany("App\Models\Types_$dates", 'id_types');

		}
		
		
		
		
    
}
