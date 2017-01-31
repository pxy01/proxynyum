<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class SearchController extends Controller
{
    //
    public function autocomplete(){
        $term = Input::get('term');
        $results = array();

        $queries = DB::table('eucircos_regions_departements_circonscriptions_communes_gps')
            ->where('nom_commune', 'LIKE', '%'.$term.'%')
            ->orWhere('code_postaux', 'LIKE', '%'.$term.'%')
            ->take(5)->get();
        foreach ($queries as $query)
        {
            $results[] = ['value' => $query->nom_commune.' ('.$query->code_postaux .')'];
        }
        return Response::json($results);
    }
}
