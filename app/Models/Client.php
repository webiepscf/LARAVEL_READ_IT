<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * GETTER des tags du post.
     */
    public function produits() {
      return $this->belongsToMany('App\Models\Produit', 'clients_has_produits', 'client_id', 'produit_id');
    }
}
