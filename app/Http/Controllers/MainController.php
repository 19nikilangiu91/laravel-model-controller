<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//7) Importo il model Movies.php.

use App\Models\Movies;

class MainController extends Controller
{
    // 1) Creaiamo una funzione "Home" ed andiamo a collegarla alla route "web.php".
    public function home()
    {
        // 4) Una volta create la page "home.blade.php", imposto il return.
        // return view('pages.home');

        // 5) Creo un $data di prova

        // $data = [
        //     'name' => 'Niki'
        // ];

        // 8) Richiamo la variabile $movies.

        $movies = Movies::all();

        $data = [
            'movies' => $movies
        ];

        // var_dump($data);

        return view('pages.home', $data);
    }
}