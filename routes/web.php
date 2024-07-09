<?php

use Illuminate\Support\Facades\Route;

//Route::view('/','welcome');

Route::get('/',function() {
    return View('welcome');
});


//Route::view('/salles', 'salles');

Route::get('/dbconn',function() {
    //$filter = request('style');
    return view('dbconn');
   // return View('dbconn');
});


Route::get('/salles', function () {
    //dd("Reached the salles route");
    return view('salles');
});  
//Route::get('/salles',function() {
//    return View('salles');
//});



Route::get('/coaches', function () {
    return view('coaches');
})->name('coaches');


Route::get('/nossalles', function () {
    //dd("Reached the salles route");
    return view('nossalles');
}); 

