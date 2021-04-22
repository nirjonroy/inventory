<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'CustomerName', 'CustomerContactNoF', 'CustomerContactNoS', 'CustomerAddressF', 'CustomerAddressS', 'LatNo'
    ];
}
