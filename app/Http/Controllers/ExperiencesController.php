<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\experiences;

class ExperiencesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'exprience' => '',
            'employeur' => '',
            'date_debut' => '',
            'date_fin' => '',
            'ville' => '',
            'descriptin' => '',
            'personne' => '',

        ]);
        $input = $request->all();
        $condition = $input['experience'];
        foreach ($condition as $key => $condition) {
            $ex = new experiences;
            $ex->experience = $input['experience'][$key];
            $ex->employeur = $input['employeur'][$key];
            $ex->date_debut = $input['date_debut'][$key];
            $ex->date_fin = $input['date_fin'][$key];
            $ex->ville = $input['ville'][$key];
            $ex->description = $input['description'][$key];
            $ex->save();
        }

        
        return redirect()->route('home');
    }
}
