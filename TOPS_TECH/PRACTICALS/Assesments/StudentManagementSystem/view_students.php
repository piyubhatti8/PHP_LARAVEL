
<?php
include_once('header.php');
?>

<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage All Students</h4>
            </div>
                <div class="right-div">
                    <a href="counsellor" class="btn btn-danger pull-right">Back to Counsellor Menu</a>
                </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Manage All Students
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
                                            <th>Fees</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //--------------------------View Students---------------------
                                        if (!empty($stud_arr)) {
                                            foreach ($stud_arr as $data) {
                                                ?>
                                        <tr class="odd gradeX">                                        
                                            <td><?php echo $data->id ?></td>
                                            <td><?php echo $data->fname ?></td>
                                            <td><?php echo $data->lname ?></td>
                                            <td><?php echo $data->mob ?></td>
                                            <td><?php echo $data->sub ?></td>
                                            <td><?php echo $data->marks ?></td>
                                            <td><?php echo $data->fees ?></td>
                                           <!-- <td><a href="edit_student?student_editbtn=<?php echo $data->id ?>" class="btn btn-primary">Edit</a></td> -->
                                            <td><a href="rmv_student?stud_rmvbtn=<?php echo $data->id ?>" class="btn btn-danger">Delete</a></td>
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