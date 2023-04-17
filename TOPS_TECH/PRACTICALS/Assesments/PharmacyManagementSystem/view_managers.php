<?php include_once('header.php'); ?>
    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">


            <div class="manager">
                
                    <div class="addManager">
                        <div><center><h2 style="color:#4e73df;">View Managers</h2></center></div>
                        <br>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Profile</th>
                    <th>Manager ID</th>
                    <th>Manager Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Pharmacy Name</th>               
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($manager_arr)) {
                    foreach ($manager_arr as $data)
                    {
                ?>
                
                <tr class="odd gradeX">
                
                    <td class="center"><img src="images/upload/<?php echo $data->img ?>" height="35" width="35" class="rounded-circle" alt="no image found"></td>
                    <td><?php echo $data->mid ?></td>
                    <td><?php echo $data->name ?></td>
                    <td><?php echo $data->email ?></td>
                    <td><?php echo $data->mob ?></td>
                    <td><?php echo $data->ph_name ?></td>

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

    </section>

    <!--------------------------------- #Main section -------------------------------->



    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>


</body>
</html>