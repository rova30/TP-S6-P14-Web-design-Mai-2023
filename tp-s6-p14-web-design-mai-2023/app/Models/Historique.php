<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;


    protected $table = 'historiques';

    protected $fillable = [
        'id',
        'article_id',
        'utilisateur_id',
        'dateheuremodification',
        'contenu',
        'typemodification'
    ];

    public $timestamps = false;


}
