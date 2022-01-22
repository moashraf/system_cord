<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class projects_cat
 * @package App\Models
 * @version September 19, 2018, 11:46 am UTC
 *
 * @property string title
 * @property string body
 * @property string status
 */
class projects_cat extends Model
{
    use SoftDeletes;

    public $table = 'categories_project';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required'
    ];

    
}
