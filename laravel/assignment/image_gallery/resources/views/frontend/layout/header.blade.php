

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{url('frontend/assets/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{url('frontend/assets/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{url('frontend/assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{url('frontend/assets/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/css/lightgallery.min.css')}}">    

  <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/css/swiper.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/css/aos.css')}}">

  <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">

</head>
<body>
@include('sweetalert::alert')

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index" class="text-white h2 mb-0">Photosen</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="{{url('index')}}">Home</a></li>
                <li class="has-children">
                  <a href="">Gallery</a>
                  <ul class="dropdown">
                    @if($data)
                    @foreach($data as $d)
                      <li><a href="{{url('cat_wise_images/'.$d->id)}}">{{$d->category}}</a></li>
                    @endforeach
                   @endif
                  </ul>
                </li>
                <li><a href="{{url('services')}}">Services</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{url('contact')}}">Contact</a></li>
                @if(session()->has('id'))
                <li><a href="">{{session('name')}}</a></li>
                <li><a href="{{url('user_logout')}}">Logout</a></li>
                
                @else
                <li><a href="{{url('user_login')}}">Login/Register</a></li>
                @endif
           


              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
	
	<script src="{{url('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery-ui.js')}}"></script>
  <script src="{{url('frontend/assets/js/popper.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery.stellar.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery.countdown.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/swiper.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/aos.js')}}"></script>

  <script src="{{url('frontend/assets/js/picturefill.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/lightgallery-all.min.js')}}"></script>
  <script src="{{url('frontend/assets/js/jquery.mousewheel.min.js')}}"></script>

  <script src="{{url('frontend/assets/js/main.js')}}"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>