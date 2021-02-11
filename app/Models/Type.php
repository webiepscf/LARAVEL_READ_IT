<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * GETTER des produits du type.
     */
    public function produits() {
      return $this->hasMany('App\Models\Produit');
    }
}
