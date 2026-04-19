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

Route::get('/web-design', function () {
    $meta = [
        'title' => 'Web Design Services | Code Ethic Technologies',
        'description' => 'Creative and user-focused web design services to build responsive, modern, and conversion-friendly websites.',
        'keywords' => 'web design, responsive design, UI UX design, website design company',
        'url' => url('/web-design'),
        'image' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=1200&q=80'
    ];

    return view('web-design', compact('meta'));
});

Route::get('/web-development', function () {
    $meta = [
        'title' => 'Web Development Services | Code Ethic Technologies',
        'description' => 'Custom web development for scalable, secure, and high-performing business websites and applications.',
        'keywords' => 'web development, laravel development, custom web applications, frontend backend development',
        'url' => url('/web-development'),
        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80'
    ];

    return view('web-development', compact('meta'));
});

Route::get('product-management', function () {
    $meta = [
        'title' => 'Product Management Services | Code Ethic Technologies',
        'description' => 'Strategic product management support from discovery to roadmap planning and delivery execution.',
        'keywords' => 'product management, product roadmap, product strategy, agile product delivery',
        'url' => url('/product-management'),
        'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1200&q=80'
    ];

    return view('product-management', compact('meta'));
});

Route::get('marketing', function () {
    $meta = [
        'title' => 'Marketing Services | Code Ethic Technologies',
        'description' => 'Result-driven marketing services including SEO, paid campaigns, and content strategy for business growth.',
        'keywords' => 'digital marketing, SEO services, content marketing, performance marketing',
        'url' => url('/marketing'),
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80'
    ];

    return view('marketing', compact('meta'));
});

Route::get('/graphic-design', function () {
    $meta = [
        'title' => 'Graphic Design Services | Code Ethic Technologies',
        'description' => 'Professional graphic design for branding, social media creatives, and marketing communication materials.',
        'keywords' => 'graphic design, branding design, social media creatives, visual identity',
        'url' => url('/graphic-design'),
        'image' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=1200&q=80'
    ];

    return view('graphic-design', compact('meta'));
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

Route::get('/terms-of-service', function () {
    $meta = [
        'title' => 'Terms of Service | Code Ethic Technologies',
        'description' => 'Read the terms and conditions for using the Code Ethic Technologies website and services.',
        'keywords' => 'terms of service, terms and conditions, Code Ethic Technologies',
        'url' => url('/terms-of-service')
    ];
    return view('terms-of-service', compact('meta'));
});

Route::get('/privacy-policy', function () {
    $meta = [
        'title' => 'Privacy Policy | Code Ethic Technologies',
        'description' => 'Learn how Code Ethic Technologies collects, uses, and protects your personal information.',
        'keywords' => 'privacy policy, data protection, personal information, Code Ethic Technologies',
        'url' => url('/privacy-policy')
    ];
    return view('privacy-policy', compact('meta'));
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
