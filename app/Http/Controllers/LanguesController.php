<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\langues;

class LanguesController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
            'langues' => '',
            'niveau' => '',
            'personne' => '',

        ]);


        $input = $request->all();
        $condition = $input['langues'];
        foreach ($condition as $key => $condition) {
            $lan = new langues;
            $lan->langues = $input['langues'][$key];
            $lan->niveau = $input['niveau'][$key];
            $lan->save();
        }
        return redirect()->route('home');
    }
}
