<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produitimage extends Model
{
    public function produit()
    {
        return $this->belongsTo('App\produit');
    }
}
