@extends('frontend.layout.main')

@section('main_container') 


    <form id="form" enctype="multipart/form-data" method="post">
      @csrf
    <div class="section-heading p-5 text-center">
    <h2 class="display-4 text-center mb-5">Login</h2>
              
            </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
           
    
              <div class="p-3 p-lg-5 border">
              
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="signup" name="unm" data-bvalidator="required,email">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger" >*</span></label>
                    <input type="password" class="form-control" id="" name="pass" data-bvalidator="required">
                  </div>
                </div>
				
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit"  name="submit" class="btn btn-primary btn-lg btn-block" value="Login Here">
                  </div> 
				  <div class="col-lg-12">
                    <a href="signup_user" name="submit" > Not Registered then Register Here</a>
                  </div> 
                </div>
              </div>
          
          </div>
          
        </div>
      </div>
    </div>
    </form>

@endsection



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('frontend/assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('frontend/assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
</body>

</html>