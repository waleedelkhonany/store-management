<?php

namespace Modules\Customers\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Customers\Database\Factories\CustomerFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        "name",
        "phone",
        "address",
        "city",
        "is_active",
        "status",
        "type",
    ];

    protected $casts = [
        "status" => "boolean",
        "is_active" => "boolean",
    ];

    // protected static function newFactory(): CustomerFactory
    // {
    //     // return CustomerFactory::new();
    // }
}
