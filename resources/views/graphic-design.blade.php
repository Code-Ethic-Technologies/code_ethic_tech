@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Graphic Design</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Graphic Design</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded" alt="Graphic Design Services">
                </div>
                <div class="col-lg-6">
                    <h2>Visual Designs That Strengthen Your Brand</h2>
                    <p>We design impactful visual assets including brand identity materials, social creatives, brochures, and campaign graphics tailored to your audience.</p>
                    <p>Our creative process ensures consistency across channels, helping your brand communicate clearly and stand out in competitive markets.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
