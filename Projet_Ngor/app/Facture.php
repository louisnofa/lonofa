<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public $table = "facture";

    public function abonnement(){
        return $this->belongsTo('App\Abonnement');
    }
}
