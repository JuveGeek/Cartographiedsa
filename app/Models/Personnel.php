<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $fillable = ['nom', 'prenom', 'fonction', 'tel', 'email', 'date'];

    public function structurePorteuse()
    {
        return $this->belongsTo(StructurePorteuse::class);
    }

    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'membre_equipe')
                    ->withPivot('role', 'statut', 'actif', 'date_debut', 'date_fin');
    }

    public function pointFocals()
    {
        return $this->belongsToMany(StructurePorteuse::class, 'point_focal')
                    ->withPivot('date_debut', 'date_fin');
    }
}
