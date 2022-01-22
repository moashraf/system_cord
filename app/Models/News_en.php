<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NEWS
 * @package App\Models
 * @version August 16, 2018, 2:22 pm UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string slug
 */
class News_en extends Model
{
    use SoftDeletes;

    public $table = 'news_en';
	
    	    protected $connection = 'mysqlen';


    protected $dates = ['deleted_at'];


   public $fillable = [
        'title',
        'description',
		        'seo_title',
      'date1',
		        'date2',
		        'date3',
		        'date4',
		        'op1',
		        'op2',
		        'op3',
		        
		        'op6',
		        'op7',
		        'op8',
		        
		        'op9',
		        'op10',
		        'op11',
		           'op12',
		        'op13',
		        'op14',
        'main_img_alt',
        'meta_description',
        'number_of_visits',
        'id_new',
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
        // 'main_img_alt' => 'required',
       //  'meta_description' => 'required',
       //  'number_of_visits' => 'required',
         'title' => 'required',
         'description' => 'required',
        'slug' => 'required'
    ];

	   public function get_NEWS_path()
{
        return \URL::to('/singel_news/').'/' .$this->id;

		}
    
}
