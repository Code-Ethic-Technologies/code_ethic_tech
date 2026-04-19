@extends('layouts.app')

@section('content')
<main class="main">
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Product Management</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Product Management</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=900&q=80" class="img-fluid rounded" alt="Product Management Services">
                </div>
                <div class="col-lg-6">
                    <h2>From Idea Validation to Product Delivery</h2>
                    <p>We support businesses with product discovery, prioritization, and roadmap planning to ensure every release delivers measurable value to users.</p>
                    <p>With agile execution and data-backed decisions, we help teams align business goals, customer needs, and engineering effort for successful product outcomes.</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
