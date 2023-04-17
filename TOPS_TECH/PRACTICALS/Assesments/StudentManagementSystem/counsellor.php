
<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">

                <h4 class="header-line">Tasks</h4>
                <div>1. Add Student</div>
                <div>2. Remove Student</div>
                <div>3. View All Student</div>
                <div>4. View Specific Student</div>
            </div>
      
            <?php if($_SESSION['cnm']){?>
                        <div class="right-div">
                        <a href="counsellor_logout" class="btn btn-danger pull-right">Logout</a>
                </div>
                        
                    
                    <?php } ?> 
                <div class="right-div">
                    <a href="index" class="btn btn-danger pull-right">Back to Role Selection Menu</a>
                </div>
        </div>
        <form id="form" action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Enter Your choice
                        </div>
                        <div class="panel-body">
		
							 <div class="form-group">
								<label>Enter Your Task Number</label>
								<input class="form-control" type="number" name="task" required/>
								
							</div>
                           
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" name="submit" Value="Submit"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
</form>
    </div>
    </div>






<?php
 include_once('footer.php');
 ?> 
