@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
	  <img src="public/assets/img/hero-carousel/hero-carousel-1.jpg" alt="Web Design Services">
	  <div class="carousel-container">
		<h2>Creative Web Design</h2>
		<p>We craft visually stunning and user-friendly websites that engage your audience, strengthen your brand, and drive business growth. From sleek layouts to responsive designs, we make your online presence stand out.</p>
		<!--<a href="#featured-services" class="btn-get-started">Get Started</a>-->
	  </div>
	</div><!-- End Carousel Item -->

	<div class="carousel-item">
	  <img src="public/assets/img/hero-carousel/hero-carousel-2.jpg" alt="Web Development Services">
	  <div class="carousel-container">
		<h2>Custom Web Development</h2>
		<p>Our expert developers build secure, scalable, and high-performance web applications tailored to your business needs. Whether it’s e-commerce, enterprise solutions, or CMS platforms, we deliver reliable technology that works.</p>
		<!--<a href="#featured-services" class="btn-get-started">Get Started</a>-->
	  </div>
	</div><!-- End Carousel Item -->

	<div class="carousel-item">
	  <img src="public/assets/img/hero-carousel/hero-carousel-3.jpg" alt="Mobile App Development">
	  <div class="carousel-container">
		<h2>Mobile App Solutions</h2>
		<p>Reach your customers on the go with powerful mobile apps. We design and develop Android and iOS applications that are fast, intuitive, and feature-rich, helping you connect with users anytime, anywhere.</p>
		<!--<a href="#featured-services" class="btn-get-started">Get Started</a>-->
	  </div>
	</div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>About Us<br></p>
      </div><!-- End Section Title -->

      <div class="container">
	  
	  <div class="row gy-4">

		<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
		  <p>
			At <strong>Code Ethic Technologies</strong>, we specialize in delivering innovative, reliable, and scalable IT solutions 
			tailored to meet the unique needs of businesses across industries. Our goal is to transform ideas into impactful 
			digital experiences while maintaining the highest standards of quality and ethics.
		  </p>
		  <ul>
			<li><i class="bi bi-check2-circle"></i> <span>Custom software development and modern web solutions.</span></li>
			<li><i class="bi bi-check2-circle"></i> <span>End-to-end IT services from strategy to implementation.</span></li>
			<li><i class="bi bi-check2-circle"></i> <span>Focused on innovation, integrity, and client success.</span></li>
		  </ul>
		</div>

		<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
		  <p>
			With years of expertise in web development, software solutions, and digital transformation, 
			we partner with businesses to drive growth through technology. Our dedicated team ensures every 
			project is delivered with precision, transparency, and a customer-first approach.
		  </p>
		  <a href="{{ url('/about') }}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
		</div>

	  </div>

	</div>

    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/php.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/laravel.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/react.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/flutter.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/mysql.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="public/assets/img/node.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
	  <div class="container">
		<div class="section-title text-center mb-5 aos-init aos-animate" data-aos="fade-up">
		  <h2>Our Services</h2>
		  <p>Innovative Digital Solutions for Modern Businesses</p>
		</div>

		<div class="row gy-4">

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-code-slash icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">Web &amp; App Development</a>
				</h4>
				<p class="description">
				  Build responsive websites and high-performing mobile apps with the latest
				  frameworks including Laravel, React.js, Angular, and Flutter to deliver
				  seamless user experiences.
				</p>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-graph-up-arrow icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">Digital Marketing &amp; SEO</a>
				</h4>
				<p class="description">
				  Enhance your brand visibility with data-driven digital marketing campaigns
				  and SEO strategies that help your business rank higher, attract traffic,
				  and convert leads into customers.
				</p>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-cart icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">E-Commerce Solutions</a>
				</h4>
				<p class="description">
				  From small stores to enterprise platforms, we create secure and scalable
				  e-commerce solutions designed to maximize sales and provide a smooth
				  shopping experience for your customers.
				</p>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-cloud-arrow-up icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">Cloud &amp; DevOps Services</a>
				</h4>
				<p class="description">
				  Accelerate deployment and improve scalability with our cloud and DevOps
				  expertise. We specialize in AWS, Azure, and Google Cloud for fast,
				  reliable, and secure application delivery.
				</p>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-shield-lock icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">Cybersecurity Solutions</a>
				</h4>
				<p class="description">
				  Safeguard your business with advanced cybersecurity services including
				  vulnerability assessments, penetration testing, and secure application
				  development to protect against modern threats.
				</p>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
			<div class="service-item d-flex position-relative h-100">
			  <i class="bi bi-bar-chart-steps icon flex-shrink-0"></i>
			  <div>
				<h4 class="title">
				  <a href="#" class="stretched-link">Custom Software Development</a>
				</h4>
				<p class="description">
				  Streamline operations and enhance productivity with tailor-made software
				  solutions that are designed to match your exact business requirements and
				  scale as you grow.
				</p>
			  </div>
			</div>
		  </div>

		</div>
	  </div>
	</section>
  </main>
@endsection
