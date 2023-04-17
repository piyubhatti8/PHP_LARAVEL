<?php
include_once('navbar.php');
include_once('searchbar.php');

?>

<body>
    <form action="#" enctype="multipart/form-data" method="post">
    <div class="section-heading p-5">
              <h2><em>Login Here</em></h2>
              
            </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
    
           
    
              <div class="p-3 p-lg-5 border">
              
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="" name="unm">
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="" name="pass">
                  </div>
                </div>
				
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit"  name="submit" class="btn btn-primary btn-lg btn-block" value="Login Here">
                  </div> 
				  <div class="col-lg-12">
                    <a href="signup" name="submit" > Not Registered then Register Here</a>
                  </div> 
                </div>
              </div>
          
          </div>
          
        </div>
      </div>
    </div>
    </form>
    
<?php
include_once('footer.php');
?>


