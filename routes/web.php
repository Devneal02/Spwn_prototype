<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/details', function () { 
    // Hardcoded game data for the details page prototype
    $game = [
        'title' => 'The Witcher 3: Wild Hunt',
        'developer' => 'CD Projekt Red',
        'genre' => 'RPG',
        'rating' => '9.8',
        'description' => 'As Geralt of Rivia, a monster slayer for hire, you must track down the Child of Prophecy—a living weapon that can alter the shape of the world—in a vast, war-torn landscape.',
        'image' => 'https://images.igdb.com/igdb/image/upload/t_original/co1wyy.jpg'
    ];
    return view('game_details', ['game' => $game]); 
});

// NEW ROUTES:
Route::get('/login', function () { return view('login'); });
Route::get('/signup', function () { return view('signup'); });
Route::get('/discover', function () { return view('discover'); });
Route::get('/backlog', function () { return view('backlog'); });
Route::get('/community', function () {  return view('community'); });
Route::get('/games', function () {  return view('games'); });
Route::get('/profile', function () {  return view('profile'); });

