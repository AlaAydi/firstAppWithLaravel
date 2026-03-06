<?php

//c'est le fichier de routage de l'application


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route :: get ("/hello", function () {
    return "Hello World";

});


route :: get ("/about", function (){

return "<h1> Hello World </h1>
          <p> This is my first Laravel application </p>
          <ul>
          <li>PHP</li>
          <li>Laravel</li>
          <li>MySQL</li>
          </ul>
          ";
}) ;


Route::get ("/user/{nom}", function ($nom){
    return "Hello $nom";
});

//get avec  condition check
Route::get ("/users/{id}", function ($id){
return "Hello $id";
}) ->where ("id" , "[0-9]+") ;


// addig fucntion sum two numbers
Route::get ("/sum/{a}/{b}",  function ($a, $b){
    return $a + $b;
});
