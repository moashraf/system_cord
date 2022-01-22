<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order
 * @package App\Models
 * @version September 19, 2018, 11:42 am UTC
 *
 * @property string title
 * @property string body
 * @property string email
 * @property string phone
 * @property string status
 * @property string product
 */
class order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'quantity',
        'email',
        'phone',
        'status',
        'product'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'string',
        'product' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
 
        'email' => 'required',
  
    ];

      public function get_Product()
{
	 return $this->hasOne('App\Models\Products','id','product');
}
  
}
