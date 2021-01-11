<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        "image",
        "titre",
        "jour",
        "annee",
        "mois",
        "texte",
        "description",
        "user_id"
    ];
    protected $table = "articles";
    public function roles()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function users(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
