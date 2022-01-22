<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class projects
 * @package App\Models
 * @version October 29, 2018, 1:49 pm UTC
 *
 * @property string image
 * @property string icon
 * @property string status
 * @property string services_main_or_children_id
 */
class projects_ar extends Model
{
    use SoftDeletes;

    public $table = 'projects_ar';
    
     	    protected $connection = 'mysqlar';

    protected $dates = ['deleted_at'];


   public $fillable = [
    'Governorate',
        'area',
        'Country',
        'Number_floors',
        'Region',
        'slug',
        'title',
        'status',
        'id_projects',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'string',
        'icon' => 'string',
        'status' => 'string',
        'services_main_or_children_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
   public static $rules = [
        'title' => 'required',
        'description' => 'required',
   ];


    
}
