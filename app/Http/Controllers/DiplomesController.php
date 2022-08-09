<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\diplomes;

class DiplomesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'diplome' => '',
            'etablissement' => '',
            'ville' => '',
            'date_obtention' => '',
            'description' => '',
            'personne' => '',

        ]);
        $input = $request->all();
        $condition = $input['diplome'];
        foreach ($condition as $key => $condition) {
            $d = new diplomes;
            $d->diplome = $input['diplome'][$key];
            $d->etablissement = $input['etablissement'][$key];
            $d->ville = $input['ville'][$key];
            $d->date_obtention = $input['date_obtention'][$key];
            $d->description = $input['description'][$key];
            $d->save();
        }

        
        return redirect()->route('home');
    }
}
