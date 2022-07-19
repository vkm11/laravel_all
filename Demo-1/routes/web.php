<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route:: get('sample', function(){
//     return view('sample');  // http://127.0.0.1:8000/sample
// });

// Route:: get('sample/{id}', function($id){
//     echo $id;   // http://127.0.0.1:8000/sample/100
//     return view('sample');  
// });

// or
// Route::view('here','sample');  // http://127.0.0.1:8000/here
// or 
// Route::view('this','sample');  // http://127.0.0.1:8000/this

Route::view('sample','sample');  //anchor tag use //anywhere like- welcome.blade.php file
// <a href="sample">go to sample page</a>