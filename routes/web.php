<?php

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

use App\Mail\WelcomeEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendemail', function () {
//    Mail::send('emails.welcome',[],function($message){
//        $message->to('davidmgilo@gmail.com')->subject('Welcome');
//    });
    Mail::to('davidmgilo@gmail.com')->send(new WelcomeEmail());
    dump("Missatge enviat correctament");
});
