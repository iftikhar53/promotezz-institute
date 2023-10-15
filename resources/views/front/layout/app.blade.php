<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

   <!--Fontawsome-->
   <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
   <link rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
       integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
       integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   
</head>

<body>



<!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-transparent mx-5 mt-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('front.home') }}">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="{{ route('front.home') }}">Home</a>
          </li>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Service 1</a></li>
              <li><a class="dropdown-item" href="#">Service 2</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Service 3</a></li>
            </ul>
          </li> --}}

          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.courses') }}">Courses</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.about') }}">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('front.contact') }}">Contact</a>
          </li>

          <!-- <li class="nav-item">
                <a class="nav-link bg-primary-custom text-white rounded ms-3" href="#">Get in Touch</a>
              </li> -->

        </ul>

      </div>
    </div>
  </nav>
<!-- end navbars -->


@yield('content')



{{-- footer --}}
  <hr>
  <footer class=" pt-5">

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-3 px-5 my-4">
          <h1>Logo Here</h1>
          <h6>Empowering businesses to succeed in the digital age.</h6>
          <div class="mt-3">
            <a href="" target="_blank" class="text-decoration-none link-dark"><i
                class="bi bi-facebook fs-3 me-2"></i></a>
            <a href="" target="_blank" class="text-decoration-none link-dark"><i
                class="bi bi-instagram fs-3 me-2"></i></a>
            <a href="" target="_blank" class="text-decoration-none link-dark"><i
                class="bi bi-twitter fs-3 me-2"></i></a>
            <a href="" target="_blank" class="text-decoration-none link-dark"><i
                class="bi bi-linkedin fs-3 me-2"></i></a>
            <a href="https://wa.me/923088482282" target="_blank" class="text-decoration-none link-dark"><i
                class="bi bi-whatsapp fs-3 me-2"></i></a>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3 px-5 my-2">
          <h5 class="fw-bold mb-3 link-dark">Courses</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Digital Marketing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web Development</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">App Development</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">SEO</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E-Commerce</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-3 px-5 my-2">
          <h5 class="fw-bold mb-3">Useful Links</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Careers</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">latest News</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy & Policy</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms & Conditions</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Frequently Ask Questions</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-3 px-5 my-2">
          <h5 class="fw-bold mb-3">Get in Touch</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="tel:+921234567890" class="nav-link p-0 text-muted"><i class="bi bi-telephone-fill"></i> +921234567890</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="bi bi-envelope-fill"></i> info@gmail.com</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><i class="bi bi-geo-alt-fill"></i> Address Here</a></li>
          </ul>
        </div>

        <hr class="mt-3">
        <p class="px-5">© 2023 Company Name | All Rights Reserved.</p>

      </div>
    </div>
  </footer>
{{-- end footer --}}


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>



  <script src="{{ asset("js/script.js") }}"></script>
</body>

</html>