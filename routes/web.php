<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;

use App\Http\Controllers\RegistrationController;

/*Video 4 content*/

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{name}/{id?}', function($name, $id = null){
    $data = compact('name','id');
    return view('demo') -> with ($data);
});

Route::any('/test', function(){
    echo "Testing the route";
}); 

*/

/*Video 5 content**/
// Route::get('/{name?}', function($name = null){

//     $data = compact('name');
//     return view('home') -> with($data);
// }); 

// Route::get('/',function(){
//     return view('home');
//  });

//  Route::get('/about',function(){
//     return view('about');
//  });




 Route::get('/',[DemoController::class, 'home']);
// Route::get('/about',[DemoController::class, 'about']);
//Route::get('/about', 'App\Http\Controllers\DemoController@about');
Route::get('/about', SingleActionController::class);

Route::resource('/photo',PhotoController::class);

Route::get('/register', [RegistrationController::class,'index']);

Route::post('/register', [RegistrationController::class,'register']);



