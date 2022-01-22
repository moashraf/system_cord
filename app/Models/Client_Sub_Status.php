<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categories_Products
 * @package App\Models
 * @version April 5, 2018, 11:45 am UTC
 *
 * @property string title
 * @property string slug
 * @property string lang
 * @property string single_photo
 * @property string body
 */
class Client_Sub_Status extends Model
{
    use SoftDeletes;

    public $table = 'Client_Sub_Status';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'lang',
        'parentid',
		
        'single_photo',
        'body'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'lang' => 'string',
        'single_photo' => 'string',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:1',
        'slug' => 'required|min:1',
       // 'lang' => 'required|min:1',
        'single_photo' => 'min:3|mimes:jpeg,jpg,png,gif',
        'body' => 'required|min:1'
    ];

    
	
public function parent_category() {
        return $this->belongsTo(self::class, 'parentid', 'id');
    }

    public function children() {
        return $this->hasMany(self::class, 'parentid');
    }
	
	
}
