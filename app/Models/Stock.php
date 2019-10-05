<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stock
 * @package App\Models
 * @version July 5, 2019, 5:51 pm UTC
 *
 * @property string product_name
 * @property string description
 * @property float price
 * @property string image
 */
class Stock extends Model
{
    use SoftDeletes;

    public $table = 'stocks';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'description',
        'price',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'description' => 'string',
        'price' => 'float',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' =>'required',
        'description' =>'required',
        'price' =>'required',
        'image' =>'required',

    ];


}
