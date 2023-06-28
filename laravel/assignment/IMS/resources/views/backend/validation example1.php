
<html>
<title>Javascript example
</title>
    <head>

   
    </head>
<body>
        <form name="form1" action="" method="post" enctype="multipart/form-data" onsubmit="return form1_validation()">
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="text" name="aname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">OTP NUMBER</label>
                                <input type="text" name="otp" class="form-control">
                            </div>

                            <div class="col-6">
                              
                                <div class="form-group">
                                    <input type="submit" name="submit" value="submit" class="btn btn-outline-primary">
								
                                </div>
								 
                            </div>
							 
                        </form>

                        
</body>
</html>
<script>
    function form1_validation(){
       var n=document.forms["form1"]["otp"].value;
       // var n=document.form1.otp.value;
    // var number=/[0-9] + $/
        if(n=="" || n==null)  // for null condition
        {
            window.alert('Please fill out the OTP Number');  // alert msg
            return false;   //return false means msg show and again on same page with value not refresh page
        }
        if(isNan(n))){
            window.alert("Please enter number in OTP...);
            return false;
        }

    }

    </script>
