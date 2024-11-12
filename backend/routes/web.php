<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function() {
    return '<h1> Available Jobs</h1>';
})->name('jobs');

Route::any('/submit', function() {
    return  'Submitted';
});

Route::get('/test', function() {
    $url = route('jobs');
    return "<a href='$url'> Click Here </a>";
});

Route::get('/api/users', function() {
    return [
        'name' => 'john doe',
        'email' => 'email@email.com'
    ];
});

Route::get('/posts/{id}', function(string $id) {
    return 'Post ' . $id ;
})->where('id', '[0-9]+');


Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId) {
    return 'Post ' . $id . 'Comment ' . $commentId;
});


Route::get('/test', function(Request $request) {
    return [
        'method' => $request->method()
    ];
});