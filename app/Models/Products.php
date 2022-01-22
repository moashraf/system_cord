<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 * @version April 5, 2018, 10:54 am UTC
 *
 * @property string name
 * @property string body
 * @property string single_photo
 * @property integer photos_id
 * @property string component
 * @property string Net_weight
 * @property string Note
 * @property string Packing_content
 * @property integer cat_id
 * @property string lang
 * @property string slug
 */
class Products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    
//protected $connection = 'mysqlConnection2';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'body',
        'single_photo',
         'Rooms',
         'Area',
         'Colors',
        'bathroom',
        'cat_id',
        'lang',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'body' => 'string',
        'single_photo' => 'string',
     //   'photos_id' => 'integer',
        'component' => 'string',
        'Net_weight' => 'string',
        'Note' => 'string',
        'Packing_content' => 'string',
        'cat_id' => 'integer',
        'lang' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:1',
        'body' => 'required|min:1',
        'single_photo' => 'min:1|mimes:jpeg,jpg,png,gif',
   //     'photos_id' => 'numeric',
      //  'component' => 'required|min:1',
     //   'Net_weight' => 'required|min:1',
      //  'Note' => 'required|min:1',
      //  'Packing_content' => 'required|min:1',
        'cat_id' => 'required|min:1',
      //  'lang' => 'required|min:1',
   //     'slug' => 'required|min:1'
    ];


	
	
	  public function get_Departments_path()
{
         return   \URL::to('/Departments/').'/'.$this->id;

		}

		
		
		
    public function get_Product_Photos()
    {
        return $this->hasMany('App\Models\ProductsPhotos', 'Product_id');

    }
    public function get_cat_data()
{
	 return $this->hasOne('App\Models\Categories_Products','id','cat_id');
}



    
}
