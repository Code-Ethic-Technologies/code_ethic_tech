<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>{{ $meta['title'] ?? 'Code Ethic Technologies' }}</title>
    <meta name="description" content="{{ $meta['description'] ?? 'Code Ethic Technologies provides professional IT and web solutions.' }}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? 'web development, IT services, digital solutions' }}">
    
    {{-- Open Graph (Facebook, LinkedIn) --}}
    <meta property="og:title" content="{{ $meta['title'] ?? 'Code Ethic Technologies' }}">
    <meta property="og:description" content="{{ $meta['description'] ?? 'Code Ethic Technologies provides professional IT and web solutions.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $meta['url'] ?? url()->current() }}">
    <meta property="og:image" content="{{ $meta['image'] ?? asset('public/assets/img/favicon.png') }}">
    <meta property="og:site_name" content="Code Ethic Technologies">
    
    <link rel="canonical" href="{{ url()->current() }}" />

    {{-- Favicons --}}
    <link href="{{ asset('public/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/assets/img/apple-touch-icon.jpeg') }}" rel="apple-touch-icon">
	
	{{-- Fonts --}}
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	{{-- Vendor CSS --}}
	<link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/vendor/aos/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

	{{-- Main CSS --}}
	<link href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">
    @stack('styles')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M644N54T');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-07YW8XRXN0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-07YW8XRXN0');
    </script>
</head>
<body class="index-page">

    {{-- Header --}}
    @include('layouts.header')

    {{-- Menu --}}
    @include('layouts.menu')

    {{-- Main Content --}}
    <main class="content">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M644N54T"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    {{-- Vendor JS --}}
	<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
	<script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

	{{-- Main JS --}}
	<script src="{{ asset('public/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>