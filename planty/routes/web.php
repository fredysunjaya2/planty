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

    Route::get('/fun', [BenefitController::class, 'benefit']);
    Route::get('/subscription', [AccordionController::class, 'accordion'])->name('subscription');
    Route::get('/about-us', [AboutusController::class, 'values'])->name('about-us');
    Route::get('/plant-care', [PlantcareController::class, 'content'])->name('plant-care');

    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

    Route::get('/contact', function () {
        return view('contact_us');
    });

    // Route::get('/subscription/details', function () {
    //     return view('productdetail');
    // });

    // Route::get('/about-us', function () {
    //     return view('about_us');
    // })->name('about-us');

    // Route::get('/plant-care', function () {
    //     return view('plant_care');
    // })->name('plant-care');

    Route::get('/gallery', [GalleriesController::class, 'readGalleries'])->name('gallery');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/user-update', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('/profile/address-update', [AddressesController::class, 'update'])->name('address.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    Route::get('/tutorial', function () {
        return view('tutorial');
    });

    Route::get('/diseases', function () {
        return view('disease');
    });

    Route::get('/donts', function () {
        return view('donts');
    });

    Route::get('/send-mail', function () {
        $redeemCode = "HJLASHJL";

        Mail::to('roberttheherocentury@gmail.com')->send(
            new GiftMail($redeemCode)
        );

        return "success";
    });

    Route::get('/product-detail/{productType}', [SubsCategoriesController::class, 'productDetail'])->name('product-detail');
    Route::post('/payment-detail/{product}', [TransactionsController::class, 'paymentDetail'])->name('payment-detail');
    Route::post('/redeem-code', [GiftsController::class, 'redeemCode'])->name('redeem-code');
    Route::post('/process-payment', [TransactionsController::class, 'processPayment'])->name('process-payment');
    Route::get('/process-payment/success/{token}/{isGift}/{isRedeemed}', [TransactionsController::class, 'paymentSuccess'])->name('payment-success');
    Route::get('/process-payment/failed/{token}', [TransactionsController::class, 'paymentFailed'])->name('payment-success');

// Route::get('/productBeginner', [SubsCategoriesController::class, 'productBeginner'])->name('productBeginner');
// Route::get('/productEnthusiast', [SubsCategoriesController::class, 'productEnthusiast'])->name('productEnthusiast');

// Route::get('/paymentDetail', [TransactionsController::class, 'checkout'])->name('checkout');
// Route::get('/paymentDetail/failed/{transaction}', [TransactionsController::class, 'failed'])->name('checkout-failed');
