<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'id',
        'redacteur_id',
        'titre',
        'resume',
        'contenu',
        'dateheurecreation',
        'validepar',
        'dateheurevalidation',
        'publiepar',
        'dateheurepublication',
        'status',
        'img'
    ];

    public $timestamps = false;

    public function redacteurUser()
    {
        return $this->belongsTo(Utilisateur::class, 'redacteur_id');
    }

    public function getRedacteurUserAttribute()
    {
        return $this->redacteur_id ? Utilisateur::findOrFail($this->redacteur_id) : null;
    }

    public function getValideparUserAttribute()
    {
        return $this->validepar ? Utilisateur::findOrFail($this->validepar) : null;
    }

    public function getPublieparUserAttribute()
    {
        return $this->publiepar ? Utilisateur::findOrFail($this->publiepar) : null;
    }

}
