<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $name = 'John Doe';
    return view('home', ['name' => 'John Doe']);
});

Route::get('/about', function () {
    // return '<h1>About</h1><p>This is the about page.</p>';
    return view('about');
}); 

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('services', function () {
    $services = ["Web Design", "SEO", "Marketing", "Consulting"];

    return view('services', ['services' => $services]);
}); 


Route::get('/positions', function () {

    $positions = [
        [
            'id' => 1,
            'name' => 'Frontend Developer',
            'description' => 'We are looking for a Frontend Developer familiar with React.'
        ],
        [
            'id' => 2,
            'name' => 'Backend Developer',
            'description' => 'We are looking for a Backend Developer familiar with Node.js and Express.'
        ],
        [
            'id' => 3,
            'name' => 'Full Stack Developer',
            'description' => 'We are looking for a Full Stack Developer familiar with Node.js, Express, and React.'
        ]
    ];

    return view('positions');
});

// Backend API ilyen lenne:
// Route::get('/services', function () {
//     return response()->json(["message" => "This is the services page."], 200);
// });