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
								<label>Subject</label>
								<select name="sub" required>
                                    <option Value="">----------select----------</option>
                                    <option Value="Python">Python</option>
                                    <option Value="Java">Java</option>
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
                     <?php   
                                     //--------------------------View Students---------------------
                                    if (!empty($arr)) {
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
                                         
                                        </tr>
                                    </thead>
                                  
                              
                              <?php  foreach($arr as $data){                              
                                            ?>
                                    <tbody>
                                   
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $data->id ?></td>
                                            <td><?php echo $data->fname ?></td>
                                            <td><?php echo $data->lname ?></td>
                                            <td><?php echo $data->mob ?></td>
                                            <td><?php echo $data->sub ?></td>
                                            <td><?php echo $data->marks ?></td>
                                            <td><?php echo $data->fees ?></td>
                                     
                                        </tr>
                                                                
                                    </tbody>
                                    <?php
                                            }
                                        }
                                           ?>      
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
        var id=document.forms["form1"]["sub"].value;
        if (sub=="" || sub==null){
            alert('Plaese enter numder in Student ID...');
            return false;
        }
    }
</script>
<!-- -------------------------------------------------End Java Script Validation----------------------------------------- -->

 <?php
 include_once('footer.php');
 ?> 