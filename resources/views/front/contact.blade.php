
@extends('front.layout.app')

@section('content')


	<div class="bgimg w-100 d-flex justify-content-center align-items-center flex-column">
		<div class="contanier ">
      <h1 class="text-white">Contact Us</h1>
      <div class="text2 d-flex justify-content-center align-items-center">
        <a href="{{ route('front.home') }}" class="text-decoration-none text-white">Home</a>
        <span class="dot mx-1"></span>
        <span class="text-white">Contact Us</span>
      </div>
		</div>
	</div>

    
	<div class="contanier mt-5">
        <div class="col-10 col-md-4 mx-auto text-center">
            <h6>VISIT US</h6>
            <h2 class="fw-bold">Three Business Locations to Serve You Better</h2>
        </div>

        <div class="col-10 col-md-6 mx-auto text-center">
            <p class="fs-5">We have three convenient locations to serve you. Our main office is located in Dubai, UAE, while our other locations are situated in Bahawalpur and Lahore, Pakistan. Please see below for our addresses:</p>
        </div>

    </div>

    <div class="mx-auto">

        <div class="container mt-5">
            <div class="row">

                  <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div class="card shad">
                      <div class="card-body text-center">
                        <div class="text-center"><img src="images/10003.png" class="img-fluid" style="width: 35%;"></div>
                        <h4 class="card-title mt-3">Dubai</h4>
                        <p class="card-text mb-4">W3Torch, Office No. #303, Al Raffa Bldg, Al Raffa St, Bur Dubai, Dubai, United Arab Emirates</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div class="card shad">
                      <div class="card-body text-center">
                        <div class="text-center"><img src="images/10005.png" class="img-fluid" style="width: 35%;"></div>
                        <h4 class="card-title mt-3">Dubai</h4>
                        <p class="card-text mb-4">W3Torch, Office No. #303, Al Raffa Bldg, Al Raffa St, Bur Dubai, Dubai, United Arab Emirates</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-4 mt-4 mt-md-0">
                    <div class="card shad">
                      <div class="card-body text-center">
                        <div class="text-center"><img src="images/10007.png" class="img-fluid" style="width: 35%;"></div>
                        <h4 class="card-title mt-3">Dubai</h4>
                        <p class="card-text mb-4">W3Torch, Office No. #303, Al Raffa Bldg, Al Raffa St, Bur Dubai, Dubai, United Arab Emirates</p>
                      </div>
                    </div>
                  </div>

            </div>
        </div>

    </div>

    <div class="container">
        <div class="row mt-5 p-5">

            <div class="col-12 col-md-5 ms-4">
                <h6>GET IN TOUCH</h6>
                <h2 class="fw-bold">Contact Us</h2>
                <p class="fs-5">Our team is here to provide you with the expert guidance and support you need to succeed in the digital age.</p>

                <div class="mt-5">
                    <h6 class="fw-bold">Phone:</h6>
                    <h6 class="">+971505803735</h6>
                </div>

                <div class="mt-4">
                    <h6 class="fw-bold">Send Email:</h6>
                    <h6 class="">info@w3torch.com</h6>
                    <h6 class="">sales@w3torch.com</h6>
                </div>

                <div class="mt-4">
                    <h6 class="fw-bold">Address:</h6>
                    <h6 class="">#303 Al Raffa Bldg, Al Raffa St, <br>
                        Dubai, United Arab Emirates.</h6>
                </div>

            </div>

            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <h2 class="fw-bold">Drop Us a Line</h2>
                <p class="fs-5">Get in touch with us by dropping a line.</p>
                <div class="row">
                    <div class="col-12 col-md-6  pt-4">
                        <input class="" type="text" placeholder="Your Name*">
                    </div>
                    <div class="col-12 col-md-6  pt-4">
                        <input class="" type="email" placeholder="Email*">
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12 col-md-6  pt-5">
                        <input class="" type="tel" placeholder="Phone*">
                    </div>
                    <div class="col-12 col-md-6  pt-5">
                        <input class="" type="text" placeholder="Url">
                    </div>
                </div>
    
                <textarea class="col-12 pt-5 area" rows="5" placeholder="Message*"></textarea>
    
                <div class="col-12 col-md-6 pt-5 text-center mx-auto">
                    <button class="btn textbtn text-white ps-4 pe-4 fw-bold mt-3">SEND MESSAGE</button>            
                </div>
            </div>

        </div>
    </div>

    <!-- map section -->
    <div class="container ratio" style="--bs-aspect-ratio: 50%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.796629559486!2d70.29781187541508!3d28.42539279345716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375be1ca94bffb%3A0x83d692e4d929498a!2sAl%20Rehmat%20IT%20%26%20Professional%20Training%20Institute!5e0!3m2!1sen!2s!4v1697108603398!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    <!-- end map section -->


  @endsection