<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\loisirs;
use Symfony\Component\Console\Input\Input;

class LoisirsController extends Controller
{
    //
    public function store(Request $request)
    {
        $res = $request->validate([
            'loisirs' => '',
            'personne' => '',

        ]);
        $input = $request->all();
        $condition = $input['loisirs'];
        foreach ($condition as $key => $condition) {
            $student = new loisirs;
            $student->loisirs = $input['loisirs'][$key];
            $student->save();
        }
        return redirect()->route('home');
    }
}
