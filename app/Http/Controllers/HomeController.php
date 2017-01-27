<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home.index');
    }

    public function nonVotant(){

        return view('home.non-votant');
    }

    public function hesitant(){

        return view('home.hesitant');
    }

    public function nonInteresse(){

        return view('home.non-interesse');
    }

    public function voteBlanc(){

        return view('home.vote-blanc');
    }

    public function abstenant(){

        return view('home.abstenant');
    }

    public function fidele(){

        return view('home.fidele');
    }

    public function mission(){

        return view('home.mission');
    }

}
