<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
    public function LanguageChanger(Request $req){
        $req->session()->put('ShalomLangue', $req->langue);        
        return 1;
    }
}
