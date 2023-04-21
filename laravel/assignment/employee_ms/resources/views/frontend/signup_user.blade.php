 
 @extends('frontend.layout.main')

@section('main_container') 
<style>
label{
    font-weight:bold;
}

</style>
 <form id="form" enctype="multipart/form-data" method="post">
  @csrf
    <div class="site-section">
      <div class="container">
        <div class="row">
      
          <div class="col-md-12">
    
            
            <div class="section-heading p-5">
            <h2 class="display-4 text-center mb-5">Signup</h2>    
            </div>          
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="" name="name" >
                  </div>
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="" name="unm" >
                  </div>
                </div>
				<div class="form-group row">                
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="" name="pass" >
                  </div>
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Male">Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="gen" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
                  
                </div>
				<div class="form-group row">
               
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Lang <span class="text-danger">*</span></label>
                    <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Hindi" >Hindi
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="English" >English
					  <label class="form-check-label" for="radio1"></label>
					</div>
					 <div class="form-check">
					  <input type="checkbox" class="form-check-input" id="radio1" name="lang[]" value="Gujarati" >Gujarati
					  <label class="form-check-label" for="radio1"></label>
					</div>
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black" >Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="" name="mob" >
                  </div>

				  <div class="col-md-6 p-3">
					<label for="" class="text-black">Select Country <span class="text-danger">*</span></label>
					<select class="form-control" id="" name="cid">
						<option>Select Country</option>
            @foreach($country as $c)
              <option value="{{$c->id}}">{{$c->country}}</option>
            @endforeach
					
					</select>
				  </div>
               
				  <div class="col-md-6 p-3">
					<label for="profile" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="" name="img" >
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Signup">
                  </div>
				   <div class="col-lg-12">
                    <a href="login" name="submit" > Allreday Register then login Here</a>
                  </div> 
                </div>
              </div>
            </form>
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