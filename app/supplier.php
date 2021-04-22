<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable = [
        'SupplierName', 'SupplierAddress', 'SupplierShopName', 'SupplierContactNof', 'SupplierContactNos', 'LatNo'
    ];
}
