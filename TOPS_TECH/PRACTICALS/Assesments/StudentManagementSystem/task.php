<?php
$submit=$_REQUEST['submit'];
$task=$_REQUEST['task'];
if(isset($submit)){ 
           switch($task){
                case 1:
                    echo"<script>
                    window.location='add_student.php';
                    </script>";
                    break;
                case 2:
                    echo"<script>
                    window.location='rmv_student.php';
                    </script>";
                    break;
                case 3:
                    echo"<script>
                    window.location='view_student.php';
                    </script>";
                    break;
                case 4:
                    echo"<script>
                    window.location='view_spec_stud.php';
                    </script>";
                    break;
                default:
                echo"<script>
                alert('Please Enter a number 1, 2, 3 or 4 only...');
                window.location='index.php';
                </script>";
                
           }
        
   
}


?>