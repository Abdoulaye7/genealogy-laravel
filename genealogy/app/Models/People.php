<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['created_by', 'first_name', 'last_name', 'birth_name', 'middle_names', 'date_of_birth'];

     // Une personne peut avoir plusieurs enfants
     public function children()
     {
         return $this->hasMany(Relationship::class, 'parent_id');
     }

     // Une personne peut avoir plusieurs parents
     public function parents()
     {
         return $this->hasMany(Relationship::class, 'child_id');
     }

     // Une personne a un utilisateur créateur
     public function creator()
     {
         return $this->belongsTo(User::class, 'created_by');
     }
}
