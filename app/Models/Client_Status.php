<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Client_Status extends Model
{
    use SoftDeletes;

    public $table = 'Client_Status';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'services_id',
        'title', 
       ];

    
 

    
}
