<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'agent_id'];

    public function agents()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
