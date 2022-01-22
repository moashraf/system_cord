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
class services_en extends Model
{
	
	
	    protected $connection = 'mysqlen';

		
		
		
    use SoftDeletes;

    public $table = 'services_en';
    

    protected $dates = ['deleted_at'];



   public $fillable = [
        'title',
        'description',
		        'seo_title',

        'main_img_alt',
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
        'id_services' => 'string',
        'description' => 'string',
        'slug' => 'string'
    ];

    public static $rules = [
        // 'main_img_alt' => 'required',
       //  'meta_description' => 'required',
       //  'number_of_visits' => 'required',
         'title' => 'required',
         'description' => 'required',
        'slug' => 'required'
    ];

	   public function get_NEWS_path()
{
        return \URL::to('/singel_services/').'/' .$this->id;

		}

    
}
