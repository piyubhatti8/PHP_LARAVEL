<?php include_once('header.php');?>

    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <!-- ---------------------- DashBoard ------------------------ -->
                        <!-- ---------------------- DashBoard ------------------------ -->

            <!-- ---------------------- Manager ------------------------ -->
            <div class="manager">
                
                                    <div class="addManager">
                        <div class="main__form">
                            <div class="main__form--title text-center">Manager Signup</div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-user-circle"></i>
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-phone-alt"></i>
                                            <input type="number" name="mob" placeholder="Phone" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-key"></i>
                                            <input id="pwdinput" type="password" name="mpass" placeholder="Password" required="">
                                            <i id="pwd" class="fas fa-eye right"></i>
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                            <i id="left" class="fas fa-industry"></i>
                                            <input type="text" name="ph_name" placeholder="Pharmacy Name" required="">
                                        </label>
                                    </div>
                                    <div class="col col-12">
                                        <label class="input">
                                        <i id="left" class="fas fa-file"></i>
                                            <input type="file"  name="img" required="">
                                        </label>
                                    </div>
                                    <input type="hidden" name="action" value="addManager">
                                    <div class="col col-12">
                                        <input type="submit" name="submit" value="Register">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                
                
                            </div>
            <!-- ---------------------- Manager ------------------------ -->

            <!-- ---------------------- Pharmacist ------------------------ -->
            <div class="pharmacist">
                
                
                
                            </div>
            <!-- ---------------------- Pharmacist ------------------------ -->

            <!-- ---------------------- Salesman ------------------------ -->
            <div class="salesman">
                
                
                
                            </div>
            <!-- ---------------------- Salesman ------------------------ -->

            <!-- ---------------------- User Profile ------------------------ -->
            
                        <!-- ---------------------- User Profile ------------------------ -->

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