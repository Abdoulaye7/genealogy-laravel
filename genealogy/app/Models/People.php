<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['created_by', 'first_name', 'last_name', 'birth_name', 'middle_names', 'date_of_birth'];
}
