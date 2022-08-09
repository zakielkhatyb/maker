<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\qualites;

class QualitesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'qualites' => '',
            'personne' => '',

        ]);


        $input = $request->all();
        $condition = $input['qualites'];
        foreach ($condition as $key => $condition) {
            $q = new qualites;
            $q->qualites = $input['qualites'][$key];
            $q->save();
        }
        return redirect()->route('home');
    }
}
