<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // 1) Creaiamo una funzione "Home" ed andiamo a collegarla alla route "web.php".
    public function home()
    {
        return "hello to everyone";
    }
}