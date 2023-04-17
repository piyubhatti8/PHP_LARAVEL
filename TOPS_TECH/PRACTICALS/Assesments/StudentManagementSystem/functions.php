<?php
function check_role(){
    $submit=$_REQUEST['submit'];
    $role=$_REQUEST['role'];
    if(isset($submit)){ 
        if(is_numeric($role)){
                if($role==1){
                    echo"<script>
                    window.location='counsellor.php';
                    </script>";
                }
                else if($role==2){
                    echo"<script>
                    window.location='faculty.php';
                    </script>";
                    
                 }
                 else if($role==3){
                    echo"<script>
                    window.location='student.php';
                    </script>";
                    
                 }
                else{
                    echo"<script>
                    alert('Please Enter a number 1, 2 or 3 only...');
                    window.location='index.php';
                    </script>";
                    
                }
            }
        else{
            echo"<script>
                alert('Please Enter a number from role');
                window.location='index.php';
                </script>";
            }
       
    }
}



?>