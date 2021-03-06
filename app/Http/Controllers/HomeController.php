<?php

namespace App\Http\Controllers;

use App\PreinscriptionUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('home.index');
    }

    public function nonVotant(){

        return view('home.non-votant');
    }
    public function nonVotantValidate(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:preinscription_users',
            'commune' => 'required',
        ]);
        //dd($request->all());
        $user_id = 1;
        $request->merge(['type_user_id' => $user_id]);
        PreinscriptionUser::create($request->all());
        return redirect()->route('non.votant')->with('success', 'Votre demande à été prise en compte , nous vous recontacterons dans un bref délai');
    }

    public function hesitant(){

        return view('home.hesitant');
    }
    public function hesitantValidate(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:preinscription_users',
        ]);
        $user_id = 2;
        $request->merge(['type_user_id' => $user_id]);
        //dd($request->all());
        PreinscriptionUser::create($request->all());
        return redirect()->route('hesitant')->with('success', 'Votre demande à été prise en compte , nous vous recontacterons dans un bref délai');
    }

    public function nonInteresse(){

        return view('home.non-interesse');
    }
    public function nonInteresseValidate(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:preinscription_users',
        ]);
        $user_id = 3;
        $request->merge(['type_user_id' => $user_id]);
        //dd($request->all());
        PreinscriptionUser::create($request->all());
        return redirect()->route('non.interesse')->with('success', 'Votre demande à été prise en compte , nous vous recontacterons dans un bref délai');
    }

    public function voteBlanc(){

        return view('home.vote-blanc');
    }
    public function voteBlancValidate(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:preinscription_users',
        ]);
        $user_id = 4;
        $request->merge(['type_user_id' => $user_id]);
        //dd($request->all());
        PreinscriptionUser::create($request->all());
        return redirect()->route('vote.blanc')->with('success', 'Votre demande à été prise en compte , nous vous recontacterons dans un bref délai');
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
