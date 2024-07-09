<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleriesController;

Route::get('/', function () {
    return view('about_us');
});

Route::get('/fun', function () {
     $benefits = [
    [
        'emot' => '&#128516;',
        'title' => 'Reduce Stress',
        'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
    ],
    [
        'emot' => '&#128578;',
        'title' => 'Improve Mood',
        'desc' => 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum.',
    ],
    [
        'emot' => '&#128151;',
        'title' => 'Enhance Creativity',
        'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text since the 1500s.',
    ],
    [
        'emot' => '&#128640;',
        'title' => 'Boost Productivity',
        'desc' => 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Fusce suscipit libero eget elit fermentum, a pharetra quam luctus.',
    ],
    [
        'emot' => '&#127793;',
        'title' => 'Improve Air Quality',
        'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text for centuries.',
    ],
    [
        'emot' => '&#128591;',
        'title' => 'Increase Mindfulness',
        'desc' => 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula tellus nec turpis interdum, a suscipit nisl sollicitudin.',
    ],
];

    return view('funfact',compact("benefits"));
});

Route::get('/subs', function () {
    $accordions = [
     [
        'title' => 'What is included in each monthly plant kit?',
        'content' => 'Each monthly plant kit includes a selection of seasonal plants, essential gardening tools, and accessories tailored to the current season. You\'ll also receive detailed care guides and access to exclusive online content, including tutorial videos and expert tips.'
    ],
     [
        'title' => 'How do I choose the right plant kit for me?',
        'content' => 'The best plant kit for you depends on your gardening experience and preferences. Here\'s a quick guide to help you decide: ...'
    ],
    [
        'title' => 'How often will I receive a plant kit?',
        'content' => 'You\'ll receive a new plant kit every month unless you pause or cancel your subscription. We offer flexible subscription options to fit your needs.'
    ],
    [
        'title' => 'How do I care for my plants?',
        'content' => 'Each plant kit includes detailed care guides specific to the plants you receive. You\'ll also have access to exclusive online resources, including tutorial videos and expert tips, to help you keep your plants thriving.'
    ],
    [
        'title' => 'What happens if my plant arrives damaged?',
        'content' => 'We take pride in carefully packaging our plants to ensure they arrive safely. However, if your plant arrives damaged, please contact us within 48 hours of receiving your kit and we\'ll be happy to replace it for free.'
    ]
];
    return view('subscription',compact("accordions"));
});

Route::get('/subs/details', function () {
    return view('productdetail');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/plant-care', function () {
    return view('plant-care');
});

Route::get('/gallery', [GalleriesController::class, 'readGalleries']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/diseases', function () {
    return view('disease');
});
Route::get('/donts', function(){
    return view('donts');
});

Route::get('/productDetail', function(){
    return view('product_detail');
});

Route::get('/paymentDetail', function(){
    return view('payment_detail');
});
