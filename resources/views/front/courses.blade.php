@extends('front.layout.app')


@section('content')
    <div class="bgimg w-100 d-flex justify-content-center align-items-center flex-column">
        <div class="contanier ">
            <h1 class="text-white">Courses</h1>
            <div class="text2 d-flex justify-content-center align-items-center">
                <a href="{{ route('front.home') }}" class="text-decoration-none text-white">Home</a>
                <span class="dot mx-1"></span>
                <span class="text-white">Courses</span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5 p-5">
            <div class="col-12 col-lg-6">
                <img src="{{ asset('images/courses-10002.png')}}" class="img-fluid ps-5" alt="">
            </div>
            <div class="col-12 col-lg-6 pt-5 ps-5">

                <h6>WHY CHOOSE US</h6>
                <h2 class="fw-bold mb-2">All-in-one IT Services Shop!</h2>
                <p class="fs-5">We offer a wide range of services to help businesses leverage the power of technology to
                    drive business value. Our team of experts has the skills and experience to deliver high-quality
                    solutions that meet your specific needs, enabling you to achieve your business objectives and stay ahead
                    of the competition.</p>

                <div class="d-flex">
                    <div class="ms-2">
                        <div><img src="{{('images/courses-10003.png')}}" class="w-15 mb-4 mt-2"></div>
                        <div class="col d-block">
                            <h5 class="fw-bold">Timeline</h5>
                            <p class="text-para">We are committed to delivering your project on time, every time.</p>
                        </div>
                    </div>

                    <div class="ms-2">
                        <div><img src="{{('images/courses-10004.png')}}" class="w-15 mb-4 mt-2"></div>
                        <div class="col d-block">
                            <h5 class="fw-bold">Satisfaction</h5>
                            <p class="text-para">We believe that your satisfaction is the key to our success.</p>
                        </div>
                    </div>
                </div>


                <a href="#">
                    <button class="btn textbtn text-white ps-4 pe-4 fw-bold mt-3">OUR SERVICES</button>
                </a>

            </div>

        </div>
    </div>


    <div class="back p-5"
        style="background-color: #F8F8F8; background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="container mt-3 mb-3">

            <div class="text-center mb-5">
                <h5>OUR COURSES</h5>
                <h1 class="fw-bold mb-2">Let’s Check Our Courses</h1>
            </div>

            <div class="row d-flex justify-content-center mt-4">

                <div class="card card-custom d-flex position-relative text-light bg-light">
                    <div class='imgContainer'>
                        <img src="{{('images/1.jpg')}}" class="img-fluid">
                    </div>
                    <div class="content p-2 pb-0 bg-light">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#" class="mb-3">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>

                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='{{('images/2.jpg')}}' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='{{('images/3.jpg')}}' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

            </div>


            <div class="row d-flex justify-content-center">

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/4.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/6.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/7.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row d-flex justify-content-center">

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/8.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/9.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

                <div class="card card-custom d-flex position-relative ">
                    <div class='imgContainer'>
                        <img src='course/5.jpg' class="img-fluid">
                    </div>
                    <div class="content p-2">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget velit tristique,
                            sollicitudin leo viverra, suscipit neque. Aliquam ut facilisis urna, in pretium nibh. Morbi in
                            leo in eros commodo volutpat ac sed dolor.</p>
                        <a href="#" class="">
                            <button class="btn textbtn text-white px-3 fw-bold text-center">APPLY NOW</button>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>


    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="{{ asset('images/10003.png')}}" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="{{ asset('images/10004.png')}}" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="{{ asset('images/10006.png')}}" class="img-fluid pt-4" alt="">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="cover bg-white text-center mb-4">
                    <img src="{{('images/10007.png')}}" class="img-fluid pt-4" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mt-5 p-5">

            <div class="col-12 col-lg-6 ps-5">
                <img src="{{ asset('images/10017.jpg')}}" alt="" class="img-fluid">
            </div>

            <div class="col-12 col-lg-6 mt-5 mt-md-0 ps-5">
                <h6>INTERESTED?</h6>
                <h2 class="fw-bold">Request a Free Proposal!</h2>
                <p class="fs-5">Our team is here to provide you with the expert guidance and support you need to succeed
                    in the digital age.</p>
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

                <textarea class="col-12 pt-5 area" rows="3" placeholder="Message*"></textarea>

                <div class="col-12 col-md-6 pt-5  text-center mx-auto">
                    <button class="btn textbtn text-white ps-4 pe-4 fw-bold mt-3">SEND MESSAGE</button>
                </div>
            </div>



        </div>
    </div>
@endsection
