
<?php
include_once('header.php');

?>

    
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADD STUDENT</h4>
            </div>
            
                <div class="right-div">
                    <a href="counsellor" class="btn btn-danger pull-right">Back to Counsellor Menu</a>
                </div>
        </div>
        <form id="form1" action="add_student" enctype="multipart/form-data" name="" method="post" onsubmit="return validate_form()">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Student
                        </div>
                        <div class="panel-body">
		
							 <div class="form-group">
								<label>Student ID</label>
								<input class="form-control" type="text" name="id" placeholder="Student ID will be generated automatically" required disabled>
								
							</div>
                            <div class="form-group">
								<label>First Name</label>
								<input class="form-control" type="text" name="fname" required/>
								
							</div>
                            <div class="form-group">
								<label>Last Name</label>
								<input class="form-control" type="text" name="lname" required/>
								
							</div>
                            <div class="form-group">
								<label>Mobile</label>
								<input class="form-control" type="number" name="mob" required/>
							</div>
                            <div class="form-group">
								<label>Subject</label>
								<select name="sub" required>
                                    <option Value="">----------select----------</option>
                                    <option Value="Python">Python</option>
                                    <option Value="PHP">PHP</option>
                                    <option Value="C">C</option>
                                    <option Value="C++">C++</option>
                                </select>
							</div>
                            <div class="form-group">
								<label>Marks</label>
								<input class="form-control" type="number" name="marks" required/>
							</div>
                            <div class="form-group">
								<label>Fees will be added automatically.....</label>
							</div>
         
								 <div class="form-group">
									
									<input type="submit" class="btn btn-primary" name="submit" Value="Add"/>
									
								</div>
                            </div>
                        </div>
                   </div>

        </div>
</form>
    </div>
    </div>


<!-- -------------------------------------------------Start Java Script Validation----------------------------------------- -->
<script> 
    function validate_form(){
        var id=document.forms["form1"]["id"].value;
        var fname=document.forms["form1"]["fname"].value;
        var lname=document.forms["form1"]["lname"].value;  
        var mob=document.forms["form1"]["mob"].value;
        var marks=document.forms["form1"]["marks"].value;
        var alpha=/^[A-Za-z]+$/;
        var phone=/^[0-9]{10}$/;
        
        if (isNaN(id)){
            alert('Plaese enter numder in Student ID...');
            return false;
        }
        if (!alpha.test(fname)){
            alert('First Name must be an alphabet.....');
            return false;
        }
        if (!alpha.test(lname)){
            alert('Last Name must be an alphabet.....');
            return false;
        }
        if (!phone.test(mob)){
            alert('Only 10 digits are allowed in mobile number...');
            return false;
        }
        
        if (marks > 100 || marks < 0 ){
            alert('Please enter 0 to 100 in marks...');
            return false;
        }

    }
</script>
<!-- -------------------------------------------------End Java Script Validation----------------------------------------- -->


<?php
 include_once('footer.php');
 ?> 
