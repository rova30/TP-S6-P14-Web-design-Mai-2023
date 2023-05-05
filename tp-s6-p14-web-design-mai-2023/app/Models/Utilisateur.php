<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'id',
        'profil_id',
        'nom',
        'prenom',
        'email',
        'mdp'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }


}
