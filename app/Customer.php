<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Customer extends Model {

    public function orders(){
        return $this->hasMany('App\Order');
    }

}