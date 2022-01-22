<?php

namespace App\Models;

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
class types_en extends Model
{
    use SoftDeletes;

    public $table = 'types_en';
     	    protected $connection = 'mysqlen';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'job_title',
        'status',
        'title',
		'id_types',
        'description',
        'slug',
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
	
	
	   'job_title' => 'required' ,
        'status' => 'required' ,
        'title' => 'required' ,
		'id_types' => 'required' ,
        'description' => 'required' ,
        'slug' => 'required' ,
		 
    ];
	  public function get_doc_path()
{
          return   \URL::to('/Doctors/').'/'.$this->id;

		}

    
}
