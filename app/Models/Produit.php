<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    /**
     * GETTER du type du produit.
     */
    public function type() {
      return $this->belongsTo('App\Models\Type');
    }

    /**
     * GETTER des tags du post.
     */
    public function clients() {
      return $this->belongsToMany('App\Models\Client', 'clients_has_produits', 'client_id', 'produit_id');
    }
}
