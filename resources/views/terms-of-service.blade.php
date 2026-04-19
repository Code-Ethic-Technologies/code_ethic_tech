@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<main class="main">
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Terms of Service</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="current">Terms of Service</li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <h2 class="mb-3">Terms and Conditions</h2>
          <p>
            Welcome to Code Ethic Technologies. By accessing or using this website and our services,
            you agree to comply with and be bound by these Terms of Service.
          </p>

          <h4 class="mt-4">1. Use of Website</h4>
          <p>
            You agree to use this website only for lawful purposes and in a way that does not infringe
            the rights of, restrict, or inhibit anyone else from using the website.
          </p>

          <h4 class="mt-4">2. Intellectual Property</h4>
          <p>
            All content on this website, including text, graphics, logos, and design elements, is the
            property of Code Ethic Technologies unless otherwise stated. Unauthorized use is prohibited.
          </p>

          <h4 class="mt-4">3. Service Information</h4>
          <p>
            We make every effort to ensure that the information about our services is accurate and up to date.
            However, we do not guarantee the completeness or accuracy of all content at all times.
          </p>

          <h4 class="mt-4">4. Limitation of Liability</h4>
          <p>
            Code Ethic Technologies will not be liable for any indirect, incidental, or consequential damages
            arising from your use of this website or reliance on its content.
          </p>

          <h4 class="mt-4">5. External Links</h4>
          <p>
            Our website may contain links to third-party websites. We are not responsible for the content,
            privacy policies, or practices of external sites.
          </p>

          <h4 class="mt-4">6. Changes to Terms</h4>
          <p>
            We may update these Terms of Service from time to time. Changes will be posted on this page,
            and continued use of our website indicates your acceptance of those changes.
          </p>

          <h4 class="mt-4">7. Contact</h4>
          <p>
            If you have any questions regarding these terms, please contact us through our
            <a href="{{ url('/contact') }}">contact page</a>.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
