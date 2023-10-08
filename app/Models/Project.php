<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Especifica la tabla si el modelo no sigue las convenciones de Laravel
    // protected $table = 'my_projects';

    // Define los campos asignables en masa
    protected $fillable = ['title', 'category', 'research_type', 'research_brief', 'field', 'institution', 'skills'];
}
