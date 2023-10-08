<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResearchMain extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'research_main'; // Especificando la tabla si no sigue la convención de nombres

    protected $fillable = [
        'uuid',
        'title_research',
        'research_date',
        'brief_research',
        'research_type',
        'discipline_field',
        'institution',
    ];

    protected $dates = [
        'research_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Relaciones con otros modelos (si las tienes)

    public function contributions()
    {
        return $this->hasMany(Contribution::class, 'id_research');
        // Omitimos 'id_research' si tu clave foránea sigue las convenciones de Laravel
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_relation_main', 'id_research', 'tag_id');
        // Nuevamente, omitir las últimas dos claves si siguen las convenciones
    }

    public function files()
    {
        return $this->hasMany(FileResearch::class, 'id_research');
    }

    // Otros métodos del modelo...

    public function generateUuid()
    {
        $this->uuid = (string) \Str::uuid();
    }
}

