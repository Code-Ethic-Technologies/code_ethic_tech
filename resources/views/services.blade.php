@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Services</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

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
	</section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Check Our Features<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

	  <div class="row">
		<div class="col-lg-3">
		  <ul class="nav nav-tabs flex-column">
			<li class="nav-item">
			  <a class="nav-link active show" data-bs-toggle="tab" href="#features-tab-1">Web Design</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-bs-toggle="tab" href="#features-tab-2">Web Development</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-bs-toggle="tab" href="#features-tab-3">Custom Solutions</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-bs-toggle="tab" href="#features-tab-4">Digital Strategy</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-bs-toggle="tab" href="#features-tab-5">Support & Maintenance</a>
			</li>
		  </ul>
		</div>

		<div class="col-lg-9 mt-4 mt-lg-0">
		  <div class="tab-content">

			<!-- Tab 1 -->
			<div class="tab-pane active show" id="features-tab-1">
			  <div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
				  <h3>Creative & Responsive Web Design</h3>
				  <p class="fst-italic">
					First impressions matter. We craft visually appealing, user-friendly, and fully responsive designs that
					enhance your brand identity and engage your audience across all devices.
				  </p>
				  <p>
					Our design process focuses on usability, accessibility, and modern UI/UX standards to ensure your website
					not only looks great but also delivers results.
				  </p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
				  <img src="public/assets/img/tabs/tab-1.png" alt="Web Design" class="img-fluid">
				</div>
			  </div>
			</div>

			<!-- Tab 2 -->
			<div class="tab-pane" id="features-tab-2">
			  <div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
				  <h3>Scalable Web Development</h3>
				  <p class="fst-italic">
					From simple websites to complex web applications, we build secure, scalable, and performance-driven solutions tailored to your business needs.
				  </p>
				  <p>
					Using modern frameworks like Laravel, Vue.js, and Angular, we ensure your website is future-ready and can
					grow with your business. Every solution is optimized for speed, security, and scalability.
				  </p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
				  <img src="public/assets/img/tabs/tab-2.png" alt="Web Development" class="img-fluid">
				</div>
			  </div>
			</div>

			<!-- Tab 3 -->
			<div class="tab-pane" id="features-tab-3">
			  <div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
				  <h3>Tailor-Made Custom Solutions</h3>
				  <p class="fst-italic">
					Every business is unique — and so are our solutions. We develop custom applications that solve specific
					challenges and streamline your workflows.
				  </p>
				  <p>
					From CRM systems to appointment management platforms and API integrations, our team delivers software
					that adapts to your business rather than the other way around.
				  </p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
				  <img src="public/assets/img/tabs/tab-3.png" alt="Custom Solutions" class="img-fluid">
				</div>
			  </div>
			</div>

			<!-- Tab 4 -->
			<div class="tab-pane" id="features-tab-4">
			  <div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
				  <h3>Digital Strategy & Consulting</h3>
				  <p class="fst-italic">
					Technology alone isn’t enough — strategy drives success. We help you plan, execute, and scale your digital
					presence to achieve long-term business growth.
				  </p>
				  <p>
					From SEO and performance optimization to process automation and digital transformation, we partner with
					you to create a roadmap that maximizes ROI and keeps you ahead of competitors.
				  </p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
				  <img src="public/assets/img/tabs/tab-4.png" alt="Digital Strategy" class="img-fluid">
				</div>
			  </div>
			</div>

			<!-- Tab 5 -->
			<div class="tab-pane" id="features-tab-5">
			  <div class="row">
				<div class="col-lg-8 details order-2 order-lg-1">
				  <h3>Reliable Support & Maintenance</h3>
				  <p class="fst-italic">
					Launching your website is just the beginning. We provide continuous support and proactive maintenance
					to keep your systems secure, updated, and running smoothly.
				  </p>
				  <p>
					Our dedicated team ensures downtime is minimized, security patches are applied, and your business keeps
					running without interruptions. We’re always just a call away.
				  </p>
				</div>
				<div class="col-lg-4 text-center order-1 order-lg-2">
				  <img src="public/assets/img/tabs/tab-5.png" alt="Support & Maintenance" class="img-fluid">
				</div>
			  </div>
			</div>

		  </div>
		</div>
	  </div>

	</div>

    </section><!-- /Features Section -->

  </main>
@endsection
