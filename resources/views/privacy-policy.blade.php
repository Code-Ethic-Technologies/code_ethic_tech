@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<main class="main">
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Privacy Policy</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Privacy Policy</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h2 class="mb-3">Your Privacy Matters</h2>
          <p>
            At Code Ethic Technologies, we respect your privacy and are committed to protecting your personal information.
            This Privacy Policy explains how we collect, use, and safeguard your data.
          </p>

          <h4 class="mt-4">1. Information We Collect</h4>
          <p>
            We may collect personal details such as your name, email address, phone number, and any information you submit
            through our contact forms or service inquiries.
          </p>

          <h4 class="mt-4">2. How We Use Your Information</h4>
          <p>
            We use your information to respond to your inquiries, provide requested services, improve our website experience,
            and communicate relevant updates related to our offerings.
          </p>

          <h4 class="mt-4">3. Data Protection</h4>
          <p>
            We implement reasonable security measures to protect your information from unauthorized access, disclosure, or misuse.
            However, no method of data transmission over the internet is completely secure.
          </p>

          <h4 class="mt-4">4. Sharing of Information</h4>
          <p>
            We do not sell, rent, or trade your personal information to third parties. We may share data only when required by law
            or when necessary to provide services through trusted partners.
          </p>

          <h4 class="mt-4">5. Cookies</h4>
          <p>
            Our website may use cookies to enhance user experience and analyze site traffic. You can choose to disable cookies
            in your browser settings if you prefer.
          </p>

          <h4 class="mt-4">6. Policy Updates</h4>
          <p>
            We may update this Privacy Policy periodically. Any changes will be posted on this page with the latest revision date.
          </p>

          <h4 class="mt-4">7. Contact Us</h4>
          <p>
            If you have any questions about this Privacy Policy, please reach out via our
            <a href="{{ url('/contact') }}">contact page</a>.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
