@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Web Development</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Web Development</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded" alt="Web Development Services">
                </div>
                <div class="col-lg-6">
                    <h2>Scalable and Secure Development Solutions</h2>
                    <p>Our web development team builds fast, secure, and scalable applications using modern technologies. We focus on maintainable code, clean architecture, and smooth integrations.</p>
                    <p>From landing pages to complex business platforms, we deliver reliable solutions that are optimized for performance, SEO, and long-term growth.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
