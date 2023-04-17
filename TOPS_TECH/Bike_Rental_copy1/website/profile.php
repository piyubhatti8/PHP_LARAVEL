<?php
include_once('navbar.php');

?>

<body>
    <form action="#" enctype="multipart/form-data" method="post">
<div class="container">
        <div class="row">   
            <div class="col-md-4">
               <div class="p-3 py-5 align-items-center text-center">
                <img class="rounded-circle mt-5"src="images/upload/customer/<?php echo $fetch->file?>" width="200px" height="200px">
                <div class="font-weight-bold">Priyanka Solanki</div><div class="text-black-50">abc@gmail.com</div>
               </div>
         
            </div>
            <div class="col-md-3">
                <div class="mt-5 h4">Edit Profile</div>
                
                             <div class="p-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->uid?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->name?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->unm?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->mobile?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->gen?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->lang?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $fetch->country?></p>
                                            </div>
                                        </div>
                                        
                            </div>
                            <div class="col">
                                <a style="" href="edituser?btnedit=<?php echo $fetch->uid?>" class="btn btn-primary">Edit Profile</a>
                                                                  
                            </div>
                
                </div>
                

      
</div>
            <div class="row">

                
            </div>
   </div>
   </form>  
</body> 
</html>

    
    <?php
    include_once('footer.php');
    ?>