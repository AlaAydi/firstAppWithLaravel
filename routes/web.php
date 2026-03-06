<?php

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
