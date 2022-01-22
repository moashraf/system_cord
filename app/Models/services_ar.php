<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class services_ar
 * @package App\Models
 * @version October 2, 2018, 12:17 pm UTC
 *
 * @property string title
 * @property string single_photo
 * @property string id_services
 * @property string description
 * @property string slug
 */
class services_ar extends Model
{
	
	
	    protected $connection = 'mysqlar';

		
		
		
    use SoftDeletes;

    public $table = 'services_ars';
    

    protected $dates = ['deleted_at'];


  public $fillable = [
        'title',
        'description',
        'main_img_alt',
	    'seo_title',
        'meta_description',
        'number_of_visits',
        'id_services',
 	     'status',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'single_photo' => 'string',
        'id_services' => 'string',
        'description' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
   public static $rules = [
       //  'main_img_alt' => 'required',
      //   'meta_description' => 'required',
          'title' => 'required',
         'description' => 'required',
        'slug' => 'required'
    ];


	   public function get_NEWS_path()
{
        return \URL::to('/singel_services/').'/' .$this->id;

		}
		
		
		
    
}
