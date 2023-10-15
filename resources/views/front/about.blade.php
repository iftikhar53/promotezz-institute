@extends('front.layout.app')

@section('content')


    {{-- <div class="bgimg w-100">
        <div class="contanier">
            <div class="maintext text-center" style="padding-top: 80px;">
                <div class="text1">
                    <h1 class="text-white">About Us</h1>
                </div>
                <div class="text2">
                    <a href="index.html" class="text-decoration-none text-white">Home</a>
                    <span class="dot ms-1 me-1"></span>
                    <span class="text-white">About Us</span>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="bgimg w-100 d-flex justify-content-center align-items-center flex-column">
		<div class="contanier ">
      <h1 class="text-white">About Us</h1>
      <div class="text2 d-flex justify-content-center align-items-center">
        <a href="{{ route('front.home') }}" class="text-decoration-none text-white">Home</a>
        <span class="dot mx-1"></span>
        <span class="text-white">About Us</span>
      </div>
		</div>
	</div>


    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="images/10003.png" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="images/10004.png" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="images/10006.png" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="images/10007.png" class="img-fluid pt-4" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row px-3">

            <div class="col-12 col-lg-6 mt-5 ps-5">
                <div class="title p-4 pt-5">
                    <h6>ABOUT US</h6>
                    <h2 class="fw-bold">All-in-one IT institute!</h2>
                    <p>At W3Torch, we are a full-service information technology company with a focus on delivering
                        high-quality solutions that drive business growth.</p>
                    <p>With locations in Dubai, United Arab Emirates and Bahawalpur, Pakistan, and founded in 2014, we
                        have established ourselves as a trusted partner for businesses of all sizes.</p>
                </div>
                <a href="#" class="ms-4">
                    <button class="btn textbtn text-white ps-4 pe-4 fw-bold">OUR SERVICES</button>
                </a>
            </div>

            <div id="about-vid-bg" class="col-12 col-lg-6 my-5  h-sm-100 d-flex justify-content-center align-items-center">
                <div class="video ">
                    <button class="videobtn py-3 px-4 rounded-circle">
                        <a href="https://www.youtube.com/watch?v=GtHQD92zgRw&ab_channel=ARYDigitalHD">
                            <i class="fa-solid fa-play" style="color: #ffffff;"></i>
                        </a>
                    </button>
                </div>
            </div>


        </div>
    </div>

    <div class="contanier mt-5 ">
        <div class="col text-center mt-5">
            <h6>WHAT WE DO</h6>
            <h2 class="fw-bold">Fresh Ideas for Every Business</h2>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row pt-4">
            <div class="col-12 col-lg-6 pb-5 d-flex justify-content-center align-items-center">
                <img src="images/10009.png" class="img-fluid ps-5" alt="">
            </div>

            <div class="col-12 col-lg-5 mt-3 mt-lg-0">
                <section class="ps-5">
                    <ul class="timeline">
                        <li class="timeline-item mb-5">
                            <h5 class="fw-bold text-primary">Creative Approach</h5>
                            <p class="text-para">
                                Through our innovative and creative approach, we provide unique solutions that set you
                                apart from the competition and make a lasting impact on your audience.
                            </p>
                        </li>

                        <li class="timeline-item mb-5">
                            <h5 class="fw-bold text-warning">Timeline Assurance</h5>
                            <p class="text-para">
                                With our efficient project management and streamlined processes, we ensure that your
                                project is completed on schedule.
                            </p>
                        </li>

                        <li class="timeline-item mb-5">
                            <h5 class="fw-bold text-success">Guaranteed Success</h5>
                            <p class="text-para">
                                We guarantee success by delivering solutions that are customized to your unique business
                                needs and goals.
                            </p>
                        </li>
                    </ul>
                </section>
            </div>

        </div>
    </div>


    <div class="contanier mt-5">
        <div class="col-10 col-md-5 mx-auto text-center">
            <h5>OUR STORY</h5>
            <h2 class="fw-bold display-4">The Success of W3Torch</h2>
            <p class="fs-5">From a single location to a global presence, our success story is defined by our commitment
                to innovation, quality, and exceptional customer service.</p>
        </div>
    </div>


    <div class="mx-auto px-3">

        <div class="container mt-5">
            <div class="row no-gutters">
                <div class="col-12 col-md-6"> </div>
                <div class="col-12 col-md-6 py-2 border-start border-5 border-danger rounded">
                    <div class="card shad">
                        <div class="card-body">
                            <div class="float-right fs-4">➊ 2014</div>
                            <h4 class="card-title">Company Founded</h4>
                            <p class="card-text">Established with a vision to innovate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row ">
                <div class="col-12 col-md-6 py-2 border-start border-5 border-primary rounded">
                    <div class="card shad">
                        <div class="card-body">
                            <div class="float-right fs-4">➋ 2015</div>
                            <h4 class="card-title">Bahawalpur Branch</h4>
                            <p class="card-text">W3Torch opened its 1st branch in Bahawalpur, Pakistan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row no-gutters">
                <div class="col-12 col-md-6"> </div>
                <div class="col-12 col-md-6 py-2 border-start border-5 border-warning rounded">
                    <div class="card shad">
                        <div class="card-body">
                            <div class="float-right fs-4">➌ 2018</div>
                            <h4 class="card-title">Lahore Branch</h4>
                            <p class="card-text">W3Torch opened its 2nd branch in Lahore, Pakistan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row ">
                <div class="col-12 col-md-6 py-2 border-start border-5 border-success rounded">
                    <div class="card shad">
                        <div class="card-body">
                            <div class="float-right fs-4">➍ 2021</div>
                            <h4 class="card-title">Dubai Branch</h4>
                            <p class="card-text">W3Torch opened its 3rd branch in Dubai, UAE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row no-gutters">
                <div class="col-12 col-md-6"> </div>
                <div class="col-12 col-md-6 py-2 border-start border-5 border-info rounded">
                    <div class="card shad">
                        <div class="card-body">
                            <div class="float-right fs-4">➎ 2022</div>
                            <h4 class="card-title">Opening in Australia</h4>
                            <p class="card-text">Our next venture towards global presence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-5 p-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <img src="images/10011.png" class="img-fluid ps-5" alt="">
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <section class="ps-5">

                    <h6>WHY CHOOSE US</h6>
                    <h2 class="col-8 fw-bold mb-4">Save Time & Effort With the W3Torch</h2>

                    <div class="d-flex">
                        <div><img src="./images/10012.png" style="width:70%;"></div>
                        <div class="ms-2 d-block">
                            <h5 class="fw-bold">Creative Approach</h5>
                            <p class="text-para">
                                Through our innovative and creative approach, we provide unique solutions that set you
                                apart from the competition and make a lasting impact on your audience.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div><img src="./images/10013.png" style="width:70%;"></div>
                        <div class="ms-2 d-block">
                            <h5 class="fw-bold">Creative Approach</h5>
                            <p class="text-para">
                                Through our innovative and creative approach, we provide unique solutions that set you
                                apart from the competition and make a lasting impact on your audience.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div><img src="./images/10014.png" style="width:70%;"></div>
                        <div class="ms-2 d-block">
                            <h5 class="fw-bold">Creative Approach</h5>
                            <p class="text-para">
                                Through our innovative and creative approach, we provide unique solutions that set you
                                apart from the competition and make a lasting impact on your audience.
                            </p>
                        </div>
                    </div>

                    <a href="#">
                        <button class="btn textbtn text-white ps-4 pe-4 fw-bold mt-3">OUR SERVICES</button>
                    </a>

                </section>
            </div>

        </div>
    </div>

    <div class="section d-block">

        <div class="contanier mt-5">
            <div class="col-10 col-md-5 mx-auto text-center">
                <h6>CONTACT US</h6>
                <h2 class="fw-bold">Get in Touch With Us</h2>
                <p class="fs-5">Our team is here to provide you with the expert guidance and support you need to succeed
                    in the digital age.</p>
            </div>
        </div>

        <div class="p-md-3 mx-auto" style="width: 60%;">
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

            <div class="col-12 col-md-6 pt-2 text-center mx-auto">
                <button class="btn textbtn text-white ps-4 pe-4 fw-bold mt-3">SEND MESSAGE</button>
            </div>

        </div>


    </div>


    @endsection