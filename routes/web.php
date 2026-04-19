<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $meta = [
        'title' => 'Home | Code Ethic Technologies',
        'description' => 'Code Ethic Technologies offers professional web development, digital solutions, and technology services to grow your business.',
        'keywords' => 'web development, digital solutions, IT services, Code Ethic Technologies'
    ];
    return view('home', compact('meta'));
});

Route::get('/about', function () {
    $meta = [
        'title' => 'About Us | Code Ethic Technologies',
        'description' => 'Learn more about Code Ethic Technologies, our mission, vision, and the team that delivers exceptional technology solutions.',
        'keywords' => 'about Code Ethic Technologies, IT company, digital solutions, technology experts',
        'url' => url('/about'),
        'image' => asset('public/assets/img/about-portrait.jpg')
    ];
    return view('about', compact('meta'));
});

Route::get('/services', function () {
    $meta = [
        'title' => 'Services | Code Ethic Technologies',
        'description' => 'Explore the range of services provided by Code Ethic Technologies including web development, app development, and IT consulting.',
        'keywords' => 'web development services, IT consulting, app development, Code Ethic Technologies',
        'url' => url('/services'),
        'image' => asset('public/assets/img/services.jpg')
    ];
    return view('services', compact('meta'));
});

Route::get('/portfolio', function () {
    $meta = [
        'title' => 'Portfolio | Code Ethic Technologies',
        'description' => 'Check out the portfolio of Code Ethic Technologies showcasing successful projects and satisfied clients.',
        'keywords' => 'portfolio, web projects, IT solutions, Code Ethic Technologies'
    ];
    return view('portfolio', compact('meta'));
});

Route::get('/pricing', function () {
    $meta = [
        'title' => 'Pricing | Code Ethic Technologies',
        'description' => 'Discover the pricing plans of Code Ethic Technologies for web development, IT services, and digital solutions.',
        'keywords' => 'pricing plans, web development cost, IT services pricing, Code Ethic Technologies'
    ];
    return view('pricing', compact('meta'));
});

Route::get('/contact', function () {
    $meta = [
        'title' => 'Contact | Code Ethic Technologies',
        'description' => 'Get in touch with Code Ethic Technologies for web development, IT consulting, and technology solutions.',
        'keywords' => 'contact Code Ethic Technologies, IT services inquiry, web development support'
    ];
    return view('contact', compact('meta'));
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
