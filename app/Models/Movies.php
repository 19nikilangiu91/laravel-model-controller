<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    // 6) Creo le variabili che rappresentano le colonne di "movies" nel DB "movie_db"

    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
}