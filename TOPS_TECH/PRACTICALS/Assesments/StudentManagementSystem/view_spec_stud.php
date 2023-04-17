<?php
include_once('header.php');
?>

    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">

                <h4 class="header-line">View Specific Student</h4>
            </div>
            <div class="right-div">
                    <a href="counsellor" class="btn btn-danger pull-right">Back to Counsellor Menu</a>
                </div>
        </div>
        <form id="form1" action="" enctype="multipart/form-data" name="" method="post" onsubmit="return validate_form()">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                        View Specific Student
                        </div>
                        <div class="panel-body">
		
							 <div class="form-group">
								<label>Enter Student ID</label>
								<input class="form-control" type="text" name="id" placeholder="Enter Student ID...."/>
                              
								
							</div>
                           
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" name="submit" Value="Submit"/>
									
								</div>
                            </div>
                        </div>
                   </div>
                                 <?php
                                       // print_r($stud_arr);
                                        //--------------------------View Students---------------------
                                      if(!empty($fetch)){
                            
                                                ?>
                               
                   <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Firstname</th>                                        
											<th>Lastname</th>
                                            <th>Mobile</th>                                        
											<th>Subject</th>
                                            <th>Marks</th>
                                            <th>Fees</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $fetch->id ?></td>
                                            <td><?php echo $fetch->fname ?></td>
                                            <td><?php echo $fetch->lname ?></td>
                                            <td><?php echo $fetch->mob ?></td>
                                            <td><?php echo $fetch->sub ?></td>
                                            <td><?php echo $fetch->marks ?></td>
                                            <td><?php echo $fetch->fees ?></td>
                                         <!--   <td><a href="edit_student?student_editbtn=<?php echo $fetch->id ?>" class="btn btn-primary">Edit</a></td> -->
                                            <td><a href="rmv_student?stud_rmvbtn=<?php echo $fetch->id ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                           <?php
                                        
                                      }
                                        
                                       
                                           ?>                               
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>

        </div>
</form>
    </div>
    </div>
    
<!-- -------------------------------------------------Start Java Script Validation----------------------------------------- -->
<script> 
    function validate_form(){
        var id=document.forms["form1"]["id"].value;
        if (isNaN(id)){
            alert('Plaese enter numder in Student ID...');
            return false;
        }
    }
</script>
<!-- -------------------------------------------------End Java Script Validation----------------------------------------- -->

 <?php
 include_once('footer.php');
 ?> 