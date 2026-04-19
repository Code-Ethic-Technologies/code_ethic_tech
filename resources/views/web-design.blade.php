@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Web Design</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Web Design</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded" alt="Web Design Services">
                </div>
                <div class="col-lg-6">
                    <h2>Modern Web Design for Better Conversions</h2>
                    <p>We create clean and engaging website designs that align with your brand and business goals. Every screen is crafted for usability, mobile responsiveness, and a smooth user journey.</p>
                    <p>Our process includes wireframing, UI design, UX improvements, and brand consistency so your website looks professional and converts visitors into leads.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
