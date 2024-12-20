<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopRequest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shop_queries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'product_id',
        'product_name',
        'quantity',
        'product_type',
        'queries_no',
        'address1',
        'address2',
        'city',
        'state',
        'pincode',
        'status',
        'message',
        'created_at',
        'updated_at',
    ];
}