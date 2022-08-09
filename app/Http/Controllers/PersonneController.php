<?php

namespace App\Http\Controllers;

use App\Models\personne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonneController extends Controller
{
    //
    public function store(Request $request)
    {
        
        $res = $request->validate([
           // 'image'=>'',
            'nom' => '',
            'prenom' => '',
            'cin' => '',
            'email' =>  '',
            'tel' => '',
            'adress' => '',
            'code_postal' => '',
            'ville' => '',
        ]);
        $o = personne::query()->create($res);
        //FileSaver::save($request, 'avatar', $o['id'], "admins/avatars", $o)->save();
        return redirect()->route('home');
    }
}
