@extends('frontend.layout.main')

@section('main_container') 

    <div class="site-section"  data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">My Services</h2>
              </div>
            </div>
          </div>

        </div>
        
        <div class="row">
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-camera display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Camera</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$29</strong></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-picture display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Wedding Photography</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$46</strong></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-sheep display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Animal</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$24</strong></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-frame display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Portrait</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$40</strong></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-eiffel-tower display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Travel</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$35</strong></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 site-block-feature-7">
              <span class="icon flaticon-video-play display-3 text-primary mb-4 d-block"></span>
              <h3 class="text-white h4">Video Editing</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
              <p><strong class="font-weight-bold text-primary">$15</strong></p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>

    

    
    
  </div>

@endsection

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

</body>
</html>