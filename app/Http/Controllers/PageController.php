<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showSejarah(){
        return view('page.sejarah');
    }

    public function showOrganisasi(){
        return view('page.organisasi');
    }

    public function showSaran(){
        return view('page.saran');
    }

    public function showGalery(){
        return view('page.galery');
    }
}
