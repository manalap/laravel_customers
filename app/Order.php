<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Order extends Model {

    public function customer()
    {
        return $this->belongsTo('App\Customer');    
    }

}