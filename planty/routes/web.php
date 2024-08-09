<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\PlantcareController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubsCategoriesController;
use App\Http\Controllers\TransactionsController;
use App\Mail\GiftMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\AccordionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GiftsController;
use Illuminate\Support\Facades\Mail;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/subscription', [AccordionController::class, 'accordion'])->name('subscription');

Route::get('/about-us', [AboutusController::class, 'values'])->name('about-us');

Route::get('/plant-care', [PlantcareController::class, 'content'])->name('plant-care');

Route::get('/contact', function () {
    return view('contact_us');
})->name('contact-us');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/product-detail/{productType}', [SubsCategoriesController::class, 'productDetail'])->name('product-detail');

Route::get('/gallery', [GalleriesController::class, 'readGalleries'])->name('gallery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/user-update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/address-update', [AddressesController::class, 'update'])->name('address.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/payment-detail/{product}', [TransactionsController::class, 'paymentDetail'])->name('payment-detail');
    Route::post('/redeem-code', [GiftsController::class, 'redeemCode'])->name('redeem-code');
    Route::post('/process-payment', [TransactionsController::class, 'processPayment'])->name('process-payment');
    Route::get('/process-payment/success/{token}/{isGift}/{isRedeemed}', [TransactionsController::class, 'paymentSuccess'])->name('payment-success');
    Route::get('/process-payment/failed/{token}', [TransactionsController::class, 'paymentFailed'])->name('payment-failed');
});

Route::get('/fun-facts', [BenefitController::class, 'benefit'])->name('fun-facts');

Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');

Route::get('/diseases', function () {
    return view('disease');
})->name('diseases');

Route::get('/donts', function () {
    return view('donts');
})->name('donts');

