<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'quantite',
        'commentaire',
        'categorie_id',
    ];
    public function category(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
