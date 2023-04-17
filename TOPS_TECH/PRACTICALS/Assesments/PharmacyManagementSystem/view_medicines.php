<?php include_once('header.php'); ?>
    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">


            <div class="manager">
                
                    <div class="addManager">
                        <div><center><h2 style="color:#4e73df;">View Medicines</h2></center></div>
                        <br>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Medicine ID</th>
                    <th>Medicine Name</th>
                    <th>Added By</th>
                    <th>Added Date</th>
                    <th>Quantity</th>
                    <th>Price</th>               
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($medi_arr)) {
                    foreach ($medi_arr as $data)
                    {
                ?>
                
                <tr class="odd gradeX">
                    <td class="center"><?php echo $data->id?></td>
                    <td><?php echo $data->medi_name?></td>
                    <td><?php echo $data->name?></td>
                    <td><?php echo $data->added_dt?></td>
                    <td><?php echo $data->qty ?></td>
                    <td><?php echo $data->price?></td>

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