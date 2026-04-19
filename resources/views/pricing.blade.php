@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Pricing</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">Pricing</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <div class="container">
	  <div class="row gy-3">

		<!-- Static Website -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
		  <div class="pricing-item">
			<h3>Static Website</h3>
			<h4><sup>₹</sup>6,000<span> / one time</span></h4>
			<ul>
			  <li>Up to 5 Pages</li>
			  <li>Responsive Design</li>
			  <li>Basic SEO Setup</li>
			  <li class="na">Dynamic Features</li>
			  <li class="na">CMS Integration</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

		<!-- Web Application -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
		  <div class="pricing-item featured">
			<h3>Web Application</h3>
			<h4><sup>₹</sup>25,000<span> / starting</span></h4>
			<ul>
			  <li>Custom Development</li>
			  <li>Admin Dashboard</li>
			  <li>Secure Database</li>
			  <li>Scalable Architecture</li>
			  <li>API Integration</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

		<!-- Mobile Application -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
		  <div class="pricing-item">
			<h3>Mobile Application</h3>
			<h4><sup>₹</sup>40,000<span> / starting</span></h4>
			<ul>
			  <li>Android & iOS Apps</li>
			  <li>User-Friendly UI/UX</li>
			  <li>Push Notifications</li>
			  <li>API Integration</li>
			  <li>Play Store & App Store Launch</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

		<!-- Digital Marketing -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
		  <div class="pricing-item">
			<span class="advanced">Popular</span>
			<h3>Digital Marketing</h3>
			<h4><sup>₹</sup>10,000<span> / month</span></h4>
			<ul>
			  <li>SEO Optimization</li>
			  <li>Google Ads Management</li>
			  <li>Social Media Marketing</li>
			  <li>Email Campaigns</li>
			  <li>Monthly Reports</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

		<!-- Logo Design -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
		  <div class="pricing-item">
			<h3>Logo Design</h3>
			<h4><sup>₹</sup>2,000<span> / one time</span></h4>
			<ul>
			  <li>3 Initial Concepts</li>
			  <li>High-Resolution Files</li>
			  <li>Source Files Included</li>
			  <li>Unlimited Revisions</li>
			  <li>Brand Color Guide</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

		<!-- Power BI Dashboards -->
		<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="600">
		  <div class="pricing-item">
			<h3>Power BI Dashboards</h3>
			<h4><sup>₹</sup>15,000<span> / starting</span></h4>
			<ul>
			  <li>Custom Data Visualizations</li>
			  <li>Interactive Dashboards</li>
			  <li>Real-Time Reporting</li>
			  <li>Data Source Integration</li>
			  <li>Secure Access Control</li>
			</ul>
			<div class="btn-wrap">
			  <a href="{{ route('contact') }}" class="btn-buy">Get Started</a>
			</div>
		  </div>
		</div><!-- End Pricing Item -->

	  </div>
	</div>

    </section><!-- /Pricing Section -->

  </main>
@endsection
