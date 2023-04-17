<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
        switch($url)
        {
            case '/index':
               include_once('index.php');               
               if(isset($_REQUEST['submit'])){ 
                  $role=$_REQUEST['role'];
               if(is_numeric($role)){
                        switch($role){
                           case 1:
                           // $_SESSION['role']=1;
                              echo"<script>
                              window.location='counsellor_login.';
                              </script>";
                              break;
                           case 2:
                              //$_SESSION['role']=2;
                              echo"<script>
                              window.location='faculty_login';
                              </script>";
                              break;
                           case 3:
                           // $_SESSION['role']=3;
                              echo"<script>
                              window.location='student';
                              </script>";
                              break;
                           default:
                           echo"<script>
                           alert('Please Ente.pr a number 1, 2 or 3 only...');
                           window.location='index';
                           </script>";
                              
                        }
                     }
                  else{
                     echo"<script>
                           alert('Please Enter a number from role');
                           window.location='index';
                           </script>";
                     }
                  
                     }           
                break;

            case '/header':
               include_once('header.php');
               break;
            case '/footer':
               include_once('footer.php');
               break;

            case '/counsellor':
               if($_SESSION['cnm']!="counsellor"){
                  echo "<script>
                     alert('Please login as counsellor...');
                     window.location='counsellor_login';
                     </script>";   
               }
                  if(isset($_REQUEST['submit'])){ 
                     $task=$_REQUEST['task'];
                           switch($task){
                              case 1:
                                 echo"<script>
                                 window.location='add_student';
                                 </script>";
                                 break;
                              case 2:
                                 echo"<script>
                                 window.location='view_students';
                                 </script>";
                                 break;
                              case 3:
                                 echo"<script>
                                 window.location='view_students';
                                 </script>";
                                 break;
                              case 4:
                                 echo"<script>
                                 window.location='view_spec_stud';
                                 </script>";
                                 break;
                              default:
                              echo"<script>
                              alert('Please Enter a number 1, 2, 3 or 4 only...');
                              window.location='index';
                              </script>";
                              
                           }             
                  }
                  include_once('counsellor.php');
               break;
               case '/counsellor_logout':
                  session_destroy();
                        echo "<script>
                        alert('Logout successfully...');
                        window.location='counsellor_login';
                        </script>";
                  break;

               case '/counsellor_login':
                     if(isset($_REQUEST['submit'])){
                        $cnm=$_REQUEST['cnm'];
                        $cpass=$_REQUEST['cpass'];
                        if($cnm=="counsellor" || $cpass=="counsellor"){
                           echo "<script>
                           alert('You have successfully logged in..');
                           window.location='counsellor';
                           </script>";   
                        $_SESSION['cnm']=$cnm;
                        }
                        else{
                           echo "<script>
                           alert('Invalid credentials...');
                           </script>";
                        }
                     }
                     include_once('counsellor_login.php');
               break;
        
//----------------------------------------------------------Code of adding a student-------------------------------------------------
case '/add_student':
               
   include_once('add_student.php');
   if(isset($_REQUEST['submit'])){
       $fname=$_REQUEST['fname'];
       $lname=$_REQUEST['lname'];
       $mob=$_REQUEST['mob'];
       $sub=$_REQUEST['sub'];
       $marks=$_REQUEST['marks'];
       if($sub=="Python"){
           $fees=35000;
       }
       else{
           $fees=40000;
       }
       $data=  array("fname"=>$fname,"lname"=>$lname,"mob"=>$mob,"sub"=>$sub,"marks"=>$marks,"fees"=>$fees);
   $ins=$this->insert('students',$data); 
     if($ins)
     {
        echo "<script>
        alert('Student has been added....');
        </script>";
     }
     else
     {
        echo "<script>
        alert('Failed to add student....');
        </script>";
     }	
   }
  break;
//----------------------------------------------------------Code of viewing all students-------------------------------------------------
case '/view_students':
  $stud_arr=$this->select('students');
  include_once('view_students.php');
  break;
//----------------------------------------------------------Code of viewing specific student------------------------------------------------
case '/view_spec_stud':
  if(isset($_REQUEST['submit'])){
     $id=$_REQUEST['id'];
     $where=array("id"=>$id);
     $stud_arr=$this->select_where('students',$where);
		 $fetch=$stud_arr->fetch_object();
		
			if(empty($fetch)){
			   echo "<script>
			   alert('No records found');
			   </script>";
		 }
  
  }

  include_once('view_spec_stud.php');
  break;
//----------------------------------------------------------Code of deleting specific student-------------------------------------------------
case '/rmv_student':

  if(isset($_REQUEST['stud_rmvbtn'])){
    $id=$_REQUEST['stud_rmvbtn'];
     $where=array("id"=>$id);
     $del=$this->delete('students',$where);
     if($del)
     {
        echo "<script>
        alert('Student has been removed....');
        window.location='view_students';
        </script>";
     }
     else
     {
        echo "<script>
        alert('Failed to remove student....');
        </script>";
     }	
  }
  break;


           

//----------------------------------------------------------Code of faculty Tasks-------------------------------------------------
            case '/faculty':
                     if($_SESSION['fnm']!="faculty"){
                        echo "<script>
                           alert('Please login as faculty');
                           window.location='faculty_login';
                           </script>";   
                     }
                     include_once('faculty.php');
                     break;
                     case '/faculty_logout':
                        session_destroy();
                              echo "<script>
                              alert('Logout successfully...');
                              window.location='faculty_login';
                              </script>";
                        break;
                     case '/faculty_login':
                     if(isset($_REQUEST['submit'])){
                        $fnm=$_REQUEST['fnm'];
                        $fpass=$_REQUEST['fpass'];
                        if($fnm=="faculty" || $fpass=="faculty"){
                           echo "<script>
                           alert('You have successfully logged in..');
                           window.location='faculty';
                           </script>";   
                        $_SESSION['fnm']=$fnm;
                        }
                        else{
                           echo "<script>
                           alert('Invalid credentials...');
                           </script>";
                        }
                     }
                     include_once('faculty_login.php');
            break;
            case '/add_marks':
               if(isset($_REQUEST['submit'])){
                  $sub=$_REQUEST['sub'];
                  $where=array("sub"=>$sub);
                  $stud_arr=$this->select_where('students',$where);  
                  while($fetch=$stud_arr->fetch_object()) // fetch alll data from query from db
                  {
                     $arr[]=$fetch;
                  }
                  if(empty($arr)){
                     echo "<script>
                           alert('No record found of selected subject...');
                           </script>";
                  }
               }
               include_once('add_marks.php');
               break;

            case '/faculty_task':
               if(isset($_REQUEST['submit'])){
                  $task=$_REQUEST['faculty_task'];
                 if($task==1){
                  echo "<script>
                  window.location='add_marks';
                  </script>";
                 }
                 if($task==2){
                  echo "<script>
                  window.location='faculty_view';
                  </script>";
                 }
                 else{
                  echo "<script>
                 alert('Invalid choice...');
                  </script>";
                 }
                 
                  }
                  include_once('faculty.php');
                  break;

            
            case '/faculty_view':

               include_once('faculty_view.php');
               break;

           

        }
    }

}
$obj = new control;
?>