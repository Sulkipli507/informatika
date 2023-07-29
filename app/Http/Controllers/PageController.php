<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showProfil(){
        return view('page.profil');
    }
    public function showSejarah(){
        return view('page.sejarah');
    }
}
