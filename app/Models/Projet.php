<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ['nom', 'description', 'date_debut', 'date_fin', 'statut'];

    public function fonctionnalites()
    {
        return $this->hasMany(Fonctionnalite::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technologie::class);
    }

    public function difficulteProjets()
    {
        return $this->hasMany(DifficulteProjet::class);
    }

    public function amendements()
    {
        return $this->hasMany(Amendement::class);
    }

    public function structurePorteuse()
    {
        return $this->belongsTo(StructurePorteuse::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
}
