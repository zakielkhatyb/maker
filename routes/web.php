<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('firstpage'); 
})->name('fp');
Route::group(['prefix'=>'home'],function(){
Route::get('/t', function () {
    return view('homme')->with(["data"=> "one"]); 
})->name('tone');

Route::get('/tt', function () {
   
    return view('homme')->with(["data"=> 'two']); 
})->name('ttwo');

Route::get('/ttt', function () {
    return view('homme')->with(["data"=> 'three']); 
})->name('tthree');
});












Route::post('/createperson',[PersonneController::class,'store'])->name('create.person');
Route::post('/createcompetence',[\App\Http\Controllers\CompetencesController::class,'store'])->name('create.competence');
Route::post('/creatediplome',[\App\Http\Controllers\DiplomesController::class,'store'])->name('create.diplome');
Route::post('/createexperience',[\App\Http\Controllers\ExperiencesController::class,'store'])->name('create.experience');
Route::post('/createlangue',[\App\Http\Controllers\LanguesController::class,'store'])->name('create.langue');
Route::post('/createloisir',[\App\Http\Controllers\LoisirsController::class,'store'])->name('create.loisir');
Route::post('/createqualite',[\App\Http\Controllers\QualitesController::class,'store'])->name('create.qualite');

