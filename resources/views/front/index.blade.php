@extends('front.layout.app')


@section('content')

<div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="images/w3torch-header-image-282x300.png" alt="" class="img-fluid">
        <!-- <img src="images/100001.png" alt="" class=" position-absolute" id="banner-sm-1">
        <img src="images/100002.png" alt="" class="img-fluid position-absolute" id="banner-sm-2">
        <img src="images/100003.png" alt="" class="img-fluid position-absolute" id="banner-sm-3">
        <img src="images/100004.png" alt="" class="img-fluid position-absolute" id="banner-sm-4"> -->
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-start flex-column px-5">
        <h1 class="fw-bolder text-primary-custom banner-heading p-3">
          We<br> Provide<br>
          <a href="" class="typewrite text-decoration-none text-primary-light-custom fw-bolder" data-period="2000"
            data-type='[ "Applications", "Marketing", "Websites" ]'>
            <span class="wrap"></span>
          </a>
        </h1>
        <h5 class="text-secondary">Empowering businesses to succeed in the digital age.</h5>

        <!-- <form action="" class="shadow">
        <input type="text" placeholder="Enter your number" class="form-control "> 
        <button type="submit"></button>
      </form> -->

        <div class="d-flex justify-content-center align-items-center mt-3">
          <a href="tel:+923001234567"
            class="text-decoration-none text-secondary d-flex justify-content-center align-items-center">
            <div>
              <img src="images/img_box_29_violet.png" alt="" class="" style="height: 5vh;">
            </div>
            <div>
              <h6 class="">&nbsp;&nbsp;+92 300 1234567</h6>
            </div>
          </a>


        </div>
        <a href="mailto:info@demo.com" class="text-decoration-none text-secondary ms-5">info@demo.com</a>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 my-3">
        <div class="p-2 border border-secondary shadow  d-flex justify-content-center align-items-center">
          <img src="images/google-ads-expert.png" alt="" class="w-75">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 my-3 ">
        <div class="p-2 border border-secondary shadow d-flex justify-content-center align-items-center">
          <img src="images/meta-business-expert.png" alt="" class="w-75">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 my-3">
        <div class="p-2 border border-secondary shadow d-flex justify-content-center align-items-center">
          <img src="images/Ecommerce-Development-Expert.png" alt="" class="w-75">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3 my-3">
        <div class="p-2 border border-secondary shadow d-flex justify-content-center align-items-center">
          <img src="images/flutter-developer-dubai.png" alt="" class="w-75">
        </div>
      </div>
    </div>
  </div>

  <!-- services section -->
  <div class="container-fluid p-5 my-5" id="services-sec">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6 p-5 d-flex flex-column justify-content-center align-items-start">
          <h6 class="fw-bold">W3TORCH: WHO WE ARE</h6>
          <h3 class="fw-bolder mb-3">All-in-one IT Services Shop!</h3>
          <span class="text-secondary mt-5 text-justify"> W3Torch, we are a full-service information technology company
            with a focus on
            delivering high-quality
            solutions that drive business growth. With locations in Dubai, United Arab Emirates and Bahawalpur,
            Pakistan,
            and founded in 2014, we have established ourselves as a trusted partner for businesses of all sizes.
          </span>

          <button class="text-uppercase mt-5 p-3 border border-secondary rounded btn-primary-dark text-light ">discover
            more</button>
        </div>
        <div class="col-12 col-md-6 col-lg-6 px-3">
          <div class="row">
            <div class="card shadow m-3" >
              <div class="card-body">
                <img src="images/circle_orange.png" alt="">
                <h5 class="card-title py-3 fw-bolder">Discover, Explore the Products</h5>
              </div>
            </div>

            <div class="card shadow m-3">
              <div class="card-body">
                <img src="images/circle_blue.png" alt="">
                <h5 class="card-title py-3 fw-bolder">Art Direction & Brand Strategy</h5>
              </div>
            </div>

            <div class="card shadow m-3">
              <div class="card-body">
                <img src="images/circle_green.png" alt="">
                <h5 class="card-title py-3 fw-bolder">Product UX, Design & Development</h5>
              </div>
            </div>

            <div class="card shadow m-3">
              <div class="card-body">
                <img src="images/circle_purple.png" alt="">
                <h5 class="card-title py-3 fw-bolder">Art Direction & Brand Strategy</h5>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- offer section -->
  <div id="offers" class="container-fluid mt-3">
    <div class="container p-5">
      <h6 class="fw-bold text-center mt-3">OUR OFFERS</h6>
      <h3 class="fw-bold text-center">What We Offer</h3>
      <div class="row justify-content-center align-items-center">

        <!-- card 1 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-12 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/visual-designer.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">Art Direction & Brand Strategy</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">Transform your vision into reality with our Visual design services. Let us bring your ideas to life.
              </p>
            </div>
          </div>
        </div>
        <!-- card 1 end-->


        <!-- card 2 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-12 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/digital-marketing-agency.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">Digital Marketing</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">
                Boost your online presence with our digital marketing services. Increase visibility and grow your
                business.
              </p>
            </div>
          </div>
        </div>
        <!-- card 2 end-->

        <!-- card 3 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-12 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/ai-ml-services-w3torch.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">AI/ML Solutions</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">Revolutionize your agency's performance with our advanced AI solutions, driving growth and innovation.

              </p>
            </div>
          </div>
        </div>
        <!-- card 3 end-->


      </div>

      <div class="row justify-content-center align-items-center">

        <!-- card 4 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-6 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/web-development-company.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">Web Development</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">Build a strong online presence with our web development services. Expertly crafted websites, tailored
                to your needs and goals.
              </p>
            </div>
          </div>
        </div>
        <!-- card 4 end-->


        <!-- card 5 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-6 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/app-development-company.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">App Development</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">
                Transform your ideas into reality with our top-notch app development services. Crafted for efficiency
                and user-friendly.
            </div>
          </div>
        </div>
        <!-- card 5 end-->

        <!-- card 6 -->
        <div class="card shadow m-3 p-3 col-sm-12 col-md-6 col-lg-4">
          <div class="card-body d-flex flex-column">
            <div class="row">
              <div class="col-3">
                <img src="images/software-development-company.png" alt="" class="w-100 img-fluid">
              </div>
              <div class="col-9">
                <h5 class="card-title py-3 fw-bolder">Software Dev</h5>
              </div>
            </div>
            <div class="mt-3">
              <p class="mt-4">Our software development services create innovative, efficient, and user-friendly solutions for your
                business needs.

              </p>
            </div>
          </div>
        </div>
        <!-- card 6 end-->


      </div>

    </div>
  </div>

  <div class="container">
    <div class="row h-100">
      <div class=" col-sm-12 col-lg-6 p-5">
        <div id="img-p" class="d-flex justify-content-center align-items-center">
          <img src="images/w3-torch-who-we-are-480x426.jpg" alt="" id="img1" class=""> 
          <img src="images/home10-phone1.png" alt="" id="img2">
          <img src="images/home10_phone2.png" alt="" id="img3">
          <img src="images/what-to-expect-w3-torch.png" alt="" id="img4">
           <!-- <img src="images/home10_phone2.png" alt="" > -->
            
        </div>
      </div>
      <div class="col-sm-12 col-lg-6  p-5 text-secondary d-flex flex-column justify-content-center align-items-start">
        <h6 class="fw-bold">WHAT TO EXPECT</h6>
        <h3 class="fw-bold">Pay for Qualified Delivery</h3>
        <p>We are committed to delivering exceptional service and innovative solutions to our clients. We strive to
          foster a culture of excellence and innovation within our team, and hold ourselves to the highest standards of
          integrity and professionalism.</p>


        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75"
          aria-valuemin="0" aria-valuemax="100">
          <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
        </div>


        <h6 class="text-start">Timelines</h6>
        <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <div class="progress-bar" style="width: 100%">100%</div>
        </div>

        <h6 class="text-start">Satisfaction</h6>
        <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <div class="progress-bar" style="width: 100%">100%</div>
        </div>

        <h6 class="text-start">Support</h6>
        <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="100"
          aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <div class="progress-bar" style="width: 100%">100%</div>
        </div>


        <button class="mt-5 py-2 px-3 border border-secondary rounded btn-primary-dark text-light">
          Get in Touch
        </button>
      </div>
    </div>
  </div>

  <!--stats section -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 d-flex align-items-center">
        <div class="row gap-5 p-5">
          <div class="col-12 col-md-5 shadow p-5">
            <h3 class="fw-bold">319m</h3>
            <p>Digital global audience reach</p>
          </div>
          <div class="col-12 col-md-5 shadow p-5">
            <h3 class="fw-bold">319m</h3>
            <p>Digital global audience reach</p>
          </div>
          <div class="col-12 col-md-5 shadow p-5">
            <h3 class="fw-bold">319m</h3>
            <p>Digital global audience reach</p>
          </div>
          <div class="col-12 col-md-5 shadow p-5">
            <h3 class="fw-bold">319m</h3>
            <p>Digital global audience reach</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <img src="images/w3torch-stats.jpg" alt="" class="img-fluid">
      </div>
    </div>
  </div>
  <!--stats end section -->


  <!-- Featured Products -->

  <!-- end Featured Products -->

  <!-- proposel section -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <img src="images/Proposal-request-form-w3torch.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-6 px-5">
        <h3>Request a Free Proposal</h3>
        <p>Our team is here to provide you with the expert guidance and support you need to succeed in the digital age.
        </p>
        <form>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Your Name" name="name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Email" name="email">
            </div>
          </div>
          <div class="row">
            <div class="col mt-3">
              <input type="text" class="form-control" placeholder="Phone Number" name="phone">
            </div>
            <div class="col">
              <select class="form-select mt-3">
                <option>Digital Marketing</option>
                <option>Web Development</option>
                <option>App Development</option>
                <option>Ecommerce</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <textarea class="form-control mt-3 w-100" aria-label="With textarea" placeholder="Message"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <button class="text-uppercase mt-5 p-3 border border-secondary rounded btn-primary-dark text-light ">
                Send Request
              </button>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
  <!-- end proposel section -->

  <!-- section -->
  <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <h1 class="text-center fw-bolder text-gredient" style="font-size: 4rem;">New Project? Let's Talk!</h1>
      <hr class="" style="border: 3px solid rgb(0, 15, 66); width: 50px;">
      <h5 class="text-center text-secondary">Get in touch with us to start your project today.</h5>
      <a href="tel:+921234567890" class="text-center fw-bolder text-gredient fs-1">123 456 7890</a>
      <a href="#"
        class="text-center text-decoration-none text-uppercase w-25 mb-5 p-3 border border-secondary rounded btn-primary-dark text-light ">
        Send Request
      </a>
    </div>
  </div>
  <!-- end section -->
  

@endsection