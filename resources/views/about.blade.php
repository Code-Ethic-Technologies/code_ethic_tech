@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">

      <div class="container" data-aos="fade-up">

	  <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

		<div class="col-lg-5">
		  <div class="about-img">
			<img src="public/assets/img/about-portrait.jpg" class="img-fluid" alt="About Code Ethic Technologies">
		  </div>
		</div>

		<div class="col-lg-7">
		  <h3 class="pt-0 pt-lg-5">Building Digital Solutions with Integrity and Innovation</h3>

		  <!-- Tabs -->
		  <ul class="nav nav-pills mb-3">
			<li><a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">Who We Are</a></li>
			<li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">Our Mission</a></li>
			<li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">Our Vision</a></li>
		  </ul>
		  <!-- End Tabs -->

		  <!-- Tab Content -->
		  <div class="tab-content">

			<!-- Tab 1 -->
			<div class="tab-pane fade show active" id="about-2-tab1">
			  <p class="fst-italic">
				At <strong>Code Ethic Technologies</strong>, we specialize in delivering innovative web design, 
				web development, and digital solutions tailored to our clients’ unique business goals. 
				With years of experience in the IT industry, we combine creativity, technology, and strategy 
				to craft solutions that drive growth and efficiency.
			  </p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Client-Centric Approach</h4>
			  </div>
			  <p>We listen, understand, and align every project with your vision and business objectives.</p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Quality and Reliability</h4>
			  </div>
			  <p>Every line of code and every design element is built with precision and long-term value in mind.</p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Innovation-Driven</h4>
			  </div>
			  <p>We leverage modern tools, frameworks, and methodologies to deliver scalable and future-ready solutions.</p>
			</div>
			<!-- End Tab 1 Content -->

			<!-- Tab 2 -->
			<div class="tab-pane fade" id="about-2-tab2">
			  <p class="fst-italic">
				Our mission is simple: to empower businesses with ethical, scalable, and cost-effective 
				digital solutions. We aim to transform ideas into impactful platforms that improve 
				customer engagement and business outcomes.
			  </p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Deliver Value</h4>
			  </div>
			  <p>We focus on delivering measurable value to our clients through every project.</p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Support Growth</h4>
			  </div>
			  <p>We help businesses scale by designing solutions that adapt to changing market needs.</p>
			</div>
			<!-- End Tab 2 Content -->

			<!-- Tab 3 -->
			<div class="tab-pane fade" id="about-2-tab3">
			  <p class="fst-italic">
				We envision becoming a trusted global partner for businesses seeking technology-driven transformation. 
				By combining creativity with technical excellence, we aim to redefine the standards of 
				digital solutions while maintaining our core values of ethics and transparency.
			  </p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Global Reach</h4>
			  </div>
			  <p>To deliver solutions that serve clients worldwide with cultural and market adaptability.</p>

			  <div class="d-flex align-items-center mt-4">
				<i class="bi bi-check2"></i>
				<h4>Sustainable Impact</h4>
			  </div>
			  <p>Building solutions that are not only technologically sound but also environmentally and socially responsible.</p>
			</div>
			<!-- End Tab 3 Content -->

		  </div>
		</div>
	  </div>
	</div>

    </section><!-- /About 2 Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Team Section -->
    <!--<section id="team" class="team section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="public/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!--<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="public/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!--<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="public/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!--<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="public/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        <!--</div>

      </div>

    </section><!-- /Team Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Check Our Skills<br></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Photoshop</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

  </main>
@endsection
