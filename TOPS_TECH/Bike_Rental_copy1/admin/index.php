<?php
include_once('header.php');
?>

    <div class="content-wrapper">
         <div class="container">
         <form action="" enctype="" method="post">
        <div class="row pad-botm">
            <div class="col-md-12">
                
                <h4 class="header-line">Admin Login</h4>
                
            </div>

        </div>
             <div class="row">
            <div class="col-md-12">
              
			   <div class="form-group">
					<label>Enter Emai</label>
					<input type="text "class="form-control" name="anm" />
					<p class="help-block">Help text here.</p>
				</div>
				 <div class="form-group">
					<label>Enter Password</label>
					<input type="password" class="form-control" name="apass" />
					<p class="help-block">Help text here.</p>
				</div>
				<div class="form-group">
							
					<input type="submit" class="btn btn-primary" name="submit" value="Login"/>
					
				</div>
            </div>

        </div>
         </form>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->

<?php
include_once('footer.php');
?>