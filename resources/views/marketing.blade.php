@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Marketing</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Marketing</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded" alt="Marketing Services">
                </div>
                <div class="col-lg-6">
                    <h2>Marketing That Drives Qualified Leads</h2>
                    <p>Our marketing services combine SEO, paid campaigns, and content strategy to improve your online visibility and attract your ideal customers.</p>
                    <p>We create campaign plans based on analytics and business goals, then optimize continuously for better reach, engagement, and conversions.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
