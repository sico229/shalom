<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use SicoHelpers\Helpers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('Pages.Accueil');
    }
}
