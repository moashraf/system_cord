<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class image
 * @package App\Models
 * @version September 27, 2018, 10:38 am UTC
 *
 * @property string title
 * @property string body
 * @property string single_photo
 * @property string type
 * @property string link
 */
class image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'single_photo',
        'type',
        'link'
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
        'type' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'single_photo' => 'required'
    ];

    
}
