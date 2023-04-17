<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD CITY</h4>
                
                            </div>

        </div>
        <form action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add State
                        </div>
                        <div class="panel-body">
						
							<div class="form-group">
								<label>State Name</label>
								<input class="form-control" type="text" name="state" value="<?php echo $fetch->state ?>"/>
								<p class="help-block">Help text here.</p>
							</div>
                            <div class="form-group">
								<label>Select country</label>
											<select class="form-control" id="" name="cid" >
                                            <option>Select Country</option>
                                    <?php 
                                    foreach($country as $c)
                                    {
                                    ?>
                                        <option value="<?php echo $c->cid?>">
                                            <?php echo $c->country ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
								</select>
							</div>
         
								 <div class="form-group">
									
                                 <input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
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