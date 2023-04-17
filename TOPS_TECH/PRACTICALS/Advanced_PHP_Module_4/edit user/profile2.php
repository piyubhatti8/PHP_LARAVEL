<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<title>
    Assignment question 2
</title>
</head>
<body>
   <div class="container mt-5 p-5"  style="border: radius 5px; background-color: blueviolet ;height: auto;">

<div class="container p-2" style="border-radius:5px; background-color: white; height: auto ;">
        <div class="row">   
            <div class="col-md-4">
               <div class="p-3 py-5 align-items-center text-center">
			   <img class="rounded-circle mt-5"src="images/upload/customer/<?php echo $fetch->file?>" width="150px" height="150px">
             
                <div class="font-weight-bold"><?php echo $fetch->name?></div><div class="text-black-50"><?php echo $fetch->unm?></div>
               </div>
         
            </div>
            <div class="col-md-3 border-right">
                <div class="mt-5 h4">Profile</div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="lable">Name</label><?php echo $fetch->name?></div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">Phone Number</label><?php echo $fetch->mobile?></div>
                    
                </div>
               
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">Email Id</label><?php echo $fetch->unm?></div>
                    
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="lable">Education</label>MCA</div>
                    
                </div>
                    
                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="lable">Country</label><?php echo $fetch->country?></div>
                    <div class="col-md-6"><label class="lable">State/Region</label>Gujarat</div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 text-center"><button type="button" class="btn btn-primary" name="Submit">Save Profile</div>
                </div>
                </div>
            <div class="col-md-3 mt-5">
                
               
                

                
            
                </div>
            </div>
        </div>
</div>
    
   </div>
</body> 
</html>