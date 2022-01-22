<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class video
 * @package App\Models
 * @version September 27, 2018, 10:35 am UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string type
 */
class Source extends Model
{
    use SoftDeletes;

    public $table = 'Source';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'single_photo',
        'link',
        'type'
		
		
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
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'link' => 'required'
    ];

    
}
