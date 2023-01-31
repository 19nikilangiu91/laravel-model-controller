<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // 1) Creaiamo una funzione "Home" ed andiamo a collegarla alla route "web.php".
    public function home()
    {
        // 4) Una volta create la page "home.blade.php", imposto il return.
        return view('pages.home');
    }
}