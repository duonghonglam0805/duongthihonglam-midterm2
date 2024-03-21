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

// Route::get('/', function () {
//     $images_product = [
//         [
//             'image' => 'product-1.png',
//             'caption' => 'Nordic Chair',
//             'price' => '$50.00'
//         ],
//         [
//             'image' => 'product-2.png',
//             'caption' => 'Kruzo chair',
//             'price' => '$78.00'
//         ],
//         [
//             'image' => 'product-3.png',
//             'caption' => 'Egonomic Chair',
//             'price' => '$43.00'
//         ],
//     ];
//     // dd($images_product);
//     return view('clients.home', compact('images_product'));
// });

Route::get('/about', function () {
    $images = [
        [
            'image' => 'person_1.jpg',
            'name' => 'Lawson Arnold',
        ],
        [
            'image' => 'person_2.jpg',
            'name' => 'Jeremy Walker',

        ],
        [
            'image' => 'person_3.jpg',
            'name' => 'Egonomic Chair',

        ],
        [
            'image' => 'person_3.jpg',
            'name' => 'Patrik White',
        ]

    ];
    // dd($images[0]['image']);
    return view('clients.aboutus', compact('images'));
});