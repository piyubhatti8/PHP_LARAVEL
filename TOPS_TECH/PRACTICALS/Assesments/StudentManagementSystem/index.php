<?php
include_once('header.php');
?>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">

                <h4 class="header-line">Roles</h4>
                <div>Press 1 For Councellor</div>
                <div>Press 2 For Faculty</div>
                <div>Press 3 For Student</div>
            </div>

        </div>
        <form id="form" action="index" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Enter Your Role
                        </div>
                        <div class="panel-body">
		
							 <div class="form-group">
								<label>Enter Your Role</label>
								<input class="form-control" type="number" name="role"/>
								
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


?>

 <?php
 include_once('footer.php');
 ?> 