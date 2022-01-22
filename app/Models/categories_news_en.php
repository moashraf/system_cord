<?php

namespace App\Models;

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
class categories_news_en extends Model
{
    use SoftDeletes;

    public $table = 'categories_news_en';
    
     	    protected $connection = 'mysqlen';

    protected $dates = ['deleted_at'];


 
    public $fillable = [
        'number_of_visits',
        'meta_description',
        'title',
        'id_categories',
        'description',
        'slug',
        'main_img_alt',
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
        'meta_description' => 'required',
        'description' => 'required',
        'main_img_alt' => 'required',
        'slug' => 'required',
        'title' => 'required',

    ];

    
}
