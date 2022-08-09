<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\competences;

class CompetencesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'competences' => '',
            'personne' => '',

        ]);

        $input = $request->all();
        $condition = $input['competence'];
        foreach ($condition as $key => $condition) {
            $com = new competences;
            $com->competence = $input['competence'][$key];
            $com->save();
        }
        return redirect()->route('home');
    }
}
