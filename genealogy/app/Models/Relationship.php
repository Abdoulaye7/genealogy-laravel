<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by', 'parent_id', 'child_id',
    ];

    // Relation: Une relation a un créateur utilisateur
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relation: Un parent est une personne
    public function parent()
    {
        return $this->belongsTo(People::class, 'parent_id');
    }

    // Relation: Un enfant est une personne
    public function child()
    {
        return $this->belongsTo(People::class, 'child_id');
    }
}
