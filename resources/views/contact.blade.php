@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
			<iframe 
              style="border:0; width:100%; height:270px;"  
              src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d979.798569731394!2d78.66110226948832!3d10.79642731670084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDQ3JzQ3LjEiTiA3OMKwMzknNDIuMyJF!5e0!3m2!1sen!2sin!4v1776602754174!5m2!1sen!2sin" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>D/288, 7th Cross, Dheeran Nagar, Trichy, 620009</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91 8667200540</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>contact@codeethictech.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <div id="responseMessage"></div>
            <form id="contactForm" action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
               @csrf
               <div class="row gy-4">
                   <div class="col-md-6">
                       <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                   </div>

                   <div class="col-md-6">
                       <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                   </div>

                   <div class="col-md-12">
                       <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                   </div>

                   <div class="col-md-12">
                       <textarea name="message" class="form-control" rows="6" placeholder="Message" required=""></textarea>
                   </div>
                   <input type="hidden" name="recaptcha_token" id="recaptchaToken">

                   <div class="col-md-12 text-center">
                       <button class="btn btn-success" type="submit" id="sendBtn">Send Message</button>
                   </div>
               </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
        const recaptchaSiteKey = '6LcRtL8sAAAAAJAmkGeW7vzOhQbubbjHJiSiCwQu';

        function submitContactForm() {
            $.ajax({
                url: "{{ route('contact.send') }}",
                method: "POST",
                data: $('#contactForm').serialize(),
                beforeSend: function () {
                    $('#sendBtn').prop('disabled', true).text('Sending...');
                    $('#responseMessage').html('');
                },
                success: function (response) {
                    $('#responseMessage').html(
                        `<div class="alert alert-success alert-dismissible fade show" role="alert">
                            ${response.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>`
                    );
                    $('#contactForm')[0].reset();
                    $('#recaptchaToken').val('');
                },
                error: function (xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        let errorMsg = Object.values(errors).flat().join("<br>");
                        $('#responseMessage').html(
                            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                ${errorMsg}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                        );
                    } else {
                        $('#responseMessage').html(
                            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Something went wrong. Please try again.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                        );
                    }
                },
                complete: function () {
                    $('#sendBtn').prop('disabled', false).text('Send Message');
                }
            });
        }

        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            if (typeof grecaptcha === 'undefined' || !grecaptcha.enterprise) {
                $('#responseMessage').html(
                    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        reCAPTCHA failed to load. Please refresh and try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>`
                );
                return;
            }

            grecaptcha.enterprise.ready(function () {
                grecaptcha.enterprise.execute(recaptchaSiteKey, { action: 'submit' })
                    .then(function (token) {
                        $('#recaptchaToken').val(token);
                        submitContactForm();
                    })
                    .catch(function () {
                        $('#responseMessage').html(
                            `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                reCAPTCHA verification failed. Please try again.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`
                        );
                    });
            });
        });
    });
  </script>
@endsection
