<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "texte",
       

    ];
    protected $table = "commentaires";
    public function users(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function articles(){
        return $this->belongsTo(Article::class, "article_id", "id");
        }

}
