<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products

 */
class  all_models_photos  extends Model
{
    use SoftDeletes;

    public $table = 'all_models_photos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
    
        'all_Models_id',
        'image_path' 
    ];

 

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      //'image_path' => 'mimes:jpeg,jpg,png,gif',
    ];

    
}
