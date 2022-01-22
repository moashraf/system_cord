<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class request
 * @package App\Models
 * @version September 23, 2018, 8:47 am UTC
 *
 * @property string title
 * @property string body
 * @property string email
 * @property string phone
 * @property string product
 * @property string quantity
 * @property string status
 */
class request extends Model
{
    use SoftDeletes;

    public $table = 'requests';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'email',
        'phone',
        'product',
        'quantity',
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
        'email' => 'string',
        'phone' => 'string',
        'product' => 'string',
        'quantity' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ];

    
}
