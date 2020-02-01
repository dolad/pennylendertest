<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Wallet extends Model
{
    
    protected $fillable= ["user_id","transaction_id", "buyer_email",'amount'];

    
      public function user(){

        return $this->belongsTo(User::class);
      }
    
}
