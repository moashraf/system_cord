<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories_services
 * @package App\Models
 * @version March 25, 2019, 11:58 am UTC
 *
 * @property string single_photo
 * @property string status
 * @property integer parentid
 */
class categories_services extends Model
{
    use SoftDeletes;

    public $table = 'categories_services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'single_photo',
        'status',
        'parentid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'single_photo' => 'string',
        'status' => 'string',
        'parentid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
                        'single_photo' => 'mimes:jpeg,jpg,png,gif'

    ];
	
	
	 public function get_categories_services_ar_description()
{
  
 
        return $this->hasMany("App\Models\categories_services_ar", 'id_categories');

		}  
		

    
}
