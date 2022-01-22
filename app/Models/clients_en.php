<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients
 * @package App\Models
 * @version August 16, 2018, 2:36 pm UTC
 *
 * @property string title
 * @property string body
 * @property string slug
 * @property string single_photo
 */
class clients_en extends Model
{
    use SoftDeletes;

    public $table = 'clients_en';
    
 	    protected $connection = 'mysqlen';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'slug',
        'title',
        'status',
        'id_clients',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
  
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
