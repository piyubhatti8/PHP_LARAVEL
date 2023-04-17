	
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
                    <a href="view_spec_stud" class="btn btn-danger pull-right">Back to search student Menu</a>
                </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Specific Student
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
											<th>Subject</th>
                                            <th>Marks</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       // print_r($stud_arr);
                                        //--------------------------View Students---------------------
                                        if (!empty($stud_arr)){
                                               $fetch=$stud_arr->fetch_object();
                                                ?>
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $fetch->id ?></td>
                                            <td><?php echo $fetch->fname ?></td>
                                            <td><?php echo $fetch->lname ?></td>
                                            <td><?php echo $fetch->mob ?></td>
                                            <td><?php echo $fetch->sub ?></td>
                                            <td><?php echo $fetch->marks ?></td>
                                            <td><a href="edit_student?student_editbtn=<?php echo $fetch->id ?>" class="btn btn-primary">Edit</a></td>
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
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>

    
<?php
include_once('footer.php');
?>