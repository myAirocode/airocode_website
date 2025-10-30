<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Response;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here are example routes for the converted static pages. After you copy these
| into a real Laravel project, register the controller and adjust if needed.
|
*/

Route::get('/', [PageController::class, 'show'])->name('home');
Route::get('/{page}', [PageController::class, 'show'])->where('page', 
    'about-us|courses|contact-us|privacy-policy|terms-of-service|infrastructure|success-stories|faculty|enrollment|fee-structure|blog|faq|gallery|placements|services|training|training/2-months|training/3-months|training/6-months|internship|internship/1-month|internship/2-months|internship/3-months|internship/6-months|
    testimonial|courses/application-full-stack-development|courses/python-full-stack-development|courses/data-science-stack-development|courses/web-full-stack-development|courses/java-full-stack-development|courses/mern-stack-development|courses/mean-stack-development|courses/ai-ml-stack-development|services/digital-marketing|services/ecommerce-development|services/mobile-app-development|services/software-development|services/web-development|
    404'
);
Route::get('/download/{file}', function ($file) {
    $path = public_path('brochures/' . $file);

    if (file_exists($path)) {
        return Response::download($path);
    } else {
        abort(404, 'File not found.');
    }
});

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
// routes/web.php
Route::get('/clear-cache', function() {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return "Caches cleared!";
});

Route::get('/robots.txt', function () {
    return response("User-agent: *\nDisallow:\n", 200)
        ->header('Content-Type', 'text/plain');
});