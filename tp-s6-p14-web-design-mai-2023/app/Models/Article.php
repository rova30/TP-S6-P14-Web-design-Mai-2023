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
        'dateheurecraeation',
        'validepar',
        'dateheurevalidation',
        'publiepar',
        'dateheurepublication',
        'status'
    ];
}
