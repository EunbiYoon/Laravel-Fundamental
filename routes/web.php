<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** naming route  **/
Route::get('about', function () {
    return "<h1>About Page</h1>";
})->name('about');

Route::get('contact', function () {
    return "<h1>Contact Page</h1>";
});

/** route parameter  **/
Route::get('contact/{id}', function ($id) {
    return $id;
})->name('edit-contact');

Route::get('home', function () {
    return "<a href='".route('edit-contact',1)."'>About</a>";
});

/** route grouping **/
Route::group(['prefix'=>'customer'], function(){
    Route::get('/',function(){
        return "<h1>Customer List</h1>";
    });
    
    Route::get('/create',function(){
        return "<h1>Customer Create</h1>";
    });
    
    Route::get('/show',function(){
        return "<h1>Customer Show</h1>";
    });
});

/** route method **/
//get - read a resource
//post - create a resource
//put - update (multiple) resource
//patch - modify (only one) resource
//delete - delete a resource

/** fallback route **/
Route::fallback(function(){
    return "Route Not Exist!";
});

/** return with view **/
/** render data  **/
Route::get('boat',function(){
    $text="This is boat page by rendering text";
    return view('boat',['render_text'=>$text]);
});
Route::get('tube',function(){
    $text="This is tube page by rendering text";
    $check='This is about two rendering checked';
    return view('tube.index', compact('text','check'));
});