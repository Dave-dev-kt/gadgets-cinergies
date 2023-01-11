<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gadgets extends Model
{
    use HasFactory;

    protected $fillable = ['designation', 'quantite', 'categorie_id'];

    public function categories()
    {
        return $this->belongsTo(categories::class, 'categorie_id');
    }
}
