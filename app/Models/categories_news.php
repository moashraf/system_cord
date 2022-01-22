<?php

namespace App\Models;
use App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories_news
 * @package App\Models
 * @version February 13, 2019, 1:09 pm UTC
 *
 * @property integer parentid
 * @property string single_photo
 * @property string status
 */
class categories_news extends Model
{
    use SoftDeletes;

    public $table = 'categories_news';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'parentid',
        'single_photo',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'parentid' => 'integer',
        'single_photo' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

 
		

		
		  public function get_description()
{
	
	$dates = 'ar';
  

if (App::isLocale('ar')) {
   $dates = 'ar';
}else{
	
	 $dates = 'en';
	
}

        return $this->hasMany("App\Models\categories_news_$dates", 'id_categories');

		}
		
		
		
   
		
		
			
public function parent_category() {
        return $this->belongsTo(self::class, 'parentid', 'id');
    }

    public function children() {
        return $this->hasMany(self::class, 'parentid');
    }
	
	
	  public function get_all_post_on_cat() {
		  
        return $this->hasMany('App\Models\NEWS', 'cat_id');
    }
	
	
	
		   public function get_categories_news_path()
{
	
	$locale = App::getLocale();
   $NEWS = categories_news::with('get_description')->where('id', $this->id)->get();
  
 //dd( $NEWS[0]->get_NEWS_description[0]->slug );
        return \URL::to($locale.'/singel_post/').'/' .$NEWS[0]->get_description[0]->slug.'/'.$this->id ;

		}
		
		
		
	
	
	
	
	
	
	
}
