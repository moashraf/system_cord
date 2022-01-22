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
class News_ar extends Model
{
    use SoftDeletes;

    public $table = 'news_ar';
    
	    protected $connection = 'mysqlar';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'description',
        'main_img_alt',
		        'seo_title',
		        'date1',
		        'date2',
		        'date3',
		        'date4',
		        'op1',
		        'op2',
		        'op3',

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
       //  'main_img_alt' => 'required',
      //   'meta_description' => 'required',
      //   'number_of_visits' => 'required',
         'title' => 'required',
         'description' => 'required',
        'slug' => 'required'
    ];

	   public function get_NEWS_path()
{
        return \URL::to('/singel_news/').'/' .$this->id;

		}
    
}
