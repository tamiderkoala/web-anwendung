<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Finde Essensinspirationen';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Über uns - das Team';
        return view('pages.about')->with('title', $title);
    }

    public function eintraege(){
        $title = 'Blogeinträge';
        return view('pages.eintraege')->with('title', $title);
    }

}
