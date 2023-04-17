<?php include_once('header.php');
if(!$_SESSION['mid']){
    echo"<script>
    alert('Manager Login Required...');
    window.location='login';
    </script>";
}

?>
    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <!-- ---------------------- DashBoard ------------------------ -->
                        <!-- ---------------------- DashBoard ------------------------ -->

            <!-- ---------------------- Manager ------------------------ -->
            <div class="manager">
                
                                    <div class="addManager">
                        <div class="main__form">
                            <?php 
                            
                           // echo $added_dt;?>
                            <div class="main__form--title text-center">ADD MEDICINE</div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa"></i>
                                            <input type="text" name="medi_name" placeholder="Medicine Name" required="">
                                        </label>
                                    </div>                                   
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-stock"></i>
                                            <input type="number" name="qty" placeholder="Quantity" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa"></i>
                                            <input type="number" name="price" placeholder="Price" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <input type="submit" name="submit" value="Add">
                                    </div>
                                </div>
                            </form>
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