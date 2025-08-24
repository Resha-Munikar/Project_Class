<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

//http verbs (get, post, put/patch, delete, any, match)
Route::get('/user', function(){
    return 'User access';
});

Route::post('/user', function(){
    return 'User created successfully';
});

Route::put('/user/{id}', function($id){
    return 'User with ID ' . $id . ' updated successfully';
});

Route::patch('/user/{id}', function($id){
    return 'User with ID ' . $id . ' partially updated successfully';
});

Route::delete('/user/{id}', function($id){
    return 'User with ID ' . $id . ' deleted successfully';
});

Route::any('/anything', function(){
    return 'Match any http method';
});

Route::match(['get', 'post'], '/user', function(){
    return 'Match GET or POST method';
});

//Route parameter
Route::get('/user/{id}', function($id){
    return 'User with ID ' . $id . ' accessed via GET method';
});

//optional route parameter
Route::get('/user/{id?}', function($id = null){
    if($id){
        return 'User with ID ' . $id . ' accessed via GET method';
    }
    return 'User accessed via GET method without ID';
});

//multiple parameter
Route::get('/user/{id}/{name}', function($id, $name){
    return 'User with ID ' . $id . ' and Name ' . $name . ' accessed via GET method';
});