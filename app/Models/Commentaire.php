<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "jour",
        "mois",
        "annee",
        "texte"

    ];
    protected $table = "commentaires";
    public function users(){
        return $this->belongsTo(User::class, "user_id", "id");
        }
}
