
<?php
include_once('header.php');
?>

<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">View Students</h4>
            </div>
                <div class="right-div">
                    <a href="faculty" class="btn btn-danger pull-right">Back to Faculty Menu</a>
                </div>

        </div>
        <form id="form" action="" enctype="multipart/form-data" name="" method="post">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Select your subject
                        </div>
                        <div class="panel-body">
		
                        <div class="form-group">
								<label>Subject</label>
								<select name="sub" required>
                                    <option Value="">----------select----------</option>
                                    <option Value="Python">Python</option>
                                    <option Value="PHP">PHP</option>
                                    <option Value="C">C</option>
                                    <option Value="C++">C++</option>
                                </select>
							</div>
                           
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" name="submit" Value="Submit"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
</form>
                                    <?php
                                  print_r($stud_arr);
                                        //--------------------------View Students---------------------
                                        if (!empty($stud_arr)) {
                                            foreach ($stud_arr as $data) {
                                                ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Students who has registered in course <?php echo $data->sub ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Firstname</th>                                        
											<th>Lastname</th>
                                            <th>Mobile</th>                                        
                                            <th>Marks</th>
                                            <th>Fees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $data->id ?></td>
                                            <td><?php echo $data->fname ?></td>
                                            <td><?php echo $data->lname ?></td>
                                            <td><?php echo $data->mob ?></td>
                                            <td><?php echo $data->marks ?></td>
                                            <td><?php echo $data->fees ?></td>
                                           
                                        </tr>
                                           <?php
                                            }
                                        }
                                           ?>                               
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>

    
<?php
include_once('footer.php');
?>