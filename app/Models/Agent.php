<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'nom', 'prenoms', 'numero_telephone', 'email', 'is_email_sent'];
}
