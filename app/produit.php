<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    public function images()
    {
        return $this->hasMany('App\produitimage');
    }
}
