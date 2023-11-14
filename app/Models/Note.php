<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'matiere',
        'note', 
    ];

    public function eleve() {
        return $this->belongsTo(Eleve::class, 'eleve_id');
    }
}



