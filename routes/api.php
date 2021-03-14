<?php

use App\Models\Classe;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Retour de toutes les classes
Route::get('/classes', function(){
 return Classe::all();

});

// Retour d'une classe
Route::get('/classes/{classId}', function($classId){
    return Classe::findOrFail($classId);
   });

   // Modifi de la classe
Route::put('/tasks/{classId}', function($classId, Request $request){
    return Classe::findOrFail($classId)->update($request->all());
});
// Supression de la classe
Route::delete('/classes/{classId}', function($classId){
    return Classe::findOrFail($classId)->delete();
});

// Creation de la classe
Route::post('/classes', function(Request $request){
    return Classe::create($request->all());

});



// Retour de toutes les étudiants
Route::get('/students', function(){
    return Student::all();
   
   });
   
   // Retour d'un étudiant
   Route::get('/students/{studentId}', function($studentId){
       return Student::findOrFail($studentId);
      });
   
      // Modif de l'étudiant
   Route::put('/students/{studentId}', function($studentId, Request $request){

    return Student::findOrFail($studentId)->update($request->all());
   });
   // Supression de l'étudiant
   Route::delete('/students/{studentId}', function($studentId){

    return Student::findOrFail($studentId)->delete();
   });
   
   // Creation de la classe
   Route::post('/students', function(Request $request){

    return Student::create($request->all());
   
   });


   // Retour de toutes les intervenants
Route::get('/teachers', function(){
  return Student::all();
 
 });
 
 // Retour d'un l'intervenant
 Route::get('/teachers/{teacherId}', function($teacherId){
     return Teacher::findOrFail($teacherId);
    });
 
    // Modif de l'intervenant
 Route::put('/teachers/{teacherId}', function($teacherId, Request $request){
     return Teacher::findOrFail($teacherId)->update($request->all());
 });
 // Supression de l'intervenant
 Route::delete('/teachers/{teacherId}', function($teacherId){
    return Teacher::findOrFail($teacherId)->delete();
 });
 
 // Creation de l'intervenant
 Route::post('/teachers', function(Request $request){
  
     return Teacher::create($request->all());
 
 });