<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function sites(){
      return $this->belongsTo('App\User');
    }
}
