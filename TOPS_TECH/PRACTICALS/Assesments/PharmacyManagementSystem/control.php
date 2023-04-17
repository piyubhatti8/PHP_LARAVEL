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
            case '/dashboard':
               include_once('dashboard.php');
               break;
            case '/header':            
               include_once('header.php');
               break;
//----------------------------------------------------------Login Code For ADNIN & MANAGER------------------------------------------------------------
            case '/login':
               if(isset($_REQUEST['submit'])){
                  $email=$_REQUEST['email'];
                  $pass=$_REQUEST['pass'];
                  $role=$_REQUEST['role'];
                  $enc_pass=md5($pass);
                  if($role=="admin"){
                     $where=array("email"=>$email,"apass"=>$enc_pass);
                     $sel=$this->select_where('admins',$where);
                     $chk=$sel->num_rows;
                     if($chk){
                        $fetch=$sel->fetch_object();  
                        $_SESSION['aid']=$fetch->aid;
                        $_SESSION['fname']=$fetch->fname;
                        $_SESSION['lname']=$fetch->lname;
                        $_SESSION['img']=$fetch->img;

                        echo "<script>
                           alert('Admin login success...');
                           window.location='dashboard';
                           </script>";
                     }
                     else{
                        echo "<script>
                        alert('Please check username and password..');
                        </script>";
                     }
                  }
                  if($role=="manager"){
                     $where=array("email"=>$email,"mpass"=>$enc_pass);
                     $sel=$this->select_where('managers',$where);
                     $chk=$sel->num_rows;
                     if($chk){
                        $fetch=$sel->fetch_object();
                        $_SESSION['mid']=$fetch->mid;
                        $_SESSION['name']=$fetch->name;
                        $_SESSION['img']=$fetch->img;
                        echo "<script>
                           alert('Manager login success...');
                           window.location='dashboard';
                           </script>";
                     }
                     else{
                        echo "<script>
                        alert('Please check username and password..');
                        </script>";
                     }  
                  }  
            }
                  
               include_once('login.php');
               break;
//----------------------------------------------------------Logout Code For ADNIN & MANAGER------------------------------------------------------------
            case '/logout':
               if(isset($_REQUEST['logoutbtn'])){
   
                $log=$_REQUEST['logoutbtn'];
                if($log=="admin"){
                  unset($_SESSION['aid']);
                  unset($_SESSION['fname']);
                  unset($_SESSION['lname']);
                  echo "<script>
                     alert('ADMIN You have been logged out successfully...');
                     window.location='login';
                     </script>";
                }
               if($log=="manager"){
                  unset($_SESSION['mid']);
                  unset($_SESSION['name']);
                  echo "<script>
                     alert('Manager You have been logged out successfully...');
                     window.location='login';
                     </script>";
                }
               } 
              else
                  echo "<script>
                     alert('You can not logout..! Login first...!');
                     window.location='login';
                     </script>";
               break;
//----------------------------------------------------------------- ADD Medicine Code---------------------------------------------------------------
            case '/add_medicine':
               if(isset($_REQUEST['submit'])){
                  $medi_name=$_REQUEST['medi_name'];
                  $qty=$_REQUEST['qty'];
                  $price=$_REQUEST['price'];
                                                            //Medicine added date and manager will be added automatically...
                  $added_by=$_SESSION['mid'];
                  date_default_timezone_set('Asia/Calcutta');
                  $added_dt=date("d/m/y");
                  $data=array("medi_name"=>$medi_name,"qty"=>$qty,"added_dt"=>$added_dt,"added_by"=>$added_by,"price"=>$price);
                  $res=$this->insert('medicine',$data);                               
                  if($res){
                     echo"<script>
                     alert('Medicine added Successfully...');
                     window.location='manage_medicine';
                    </script>";
                  }
                  else{
                     echo"<script>
                     alert('Medicine not Added...');
                     </script>";
                  }
               
               }
               include_once('add_medicine.php');
               break;
//----------------------------------------------------------Manage Medicine Code------------------------------------------------------------
            case '/manage_medicine':
               if(!$_SESSION['mid']){
                  echo"<script>
                  alert('Please login as manager to manage...');
                  window.location='login';
                  </script>";
              }
               $medi_arr=$this->select_join2('medicine','managers','medicine.added_by=managers.mid');
               include_once('manage_medicine.php');
               break;
            case '/del_medicine':
               if(isset($_REQUEST['del_medibtn'])){
                  $id=$_REQUEST['del_medibtn'];
                  $where=array("id"=>$id);
                  $del=$this->delete('medicine',$where);
                  if($del)
                  {
                     echo"<script>
                     alert('Medicine removed successfully...');
                     window.location='manage_medicine';
                    </script>";
                  }
                  else
                  {
                     echo"<script>
                     alert('Medicine not removed...');
                    </script>";
                  }	


               }
               break;

//----------------------------------------Admin Signup Code----------------------------------------------------
            case '/admin_signup':
               if($_SESSION['aid'] || $_SESSION['mid']){
                  echo"<script>
                  alert('Please logout for signup...');
                  window.location='dashboard';
                  </script>";
              }
               if(isset($_REQUEST['submit'])){
                     $fname=$_REQUEST['fname'];
                     $lname=$_REQUEST['lname'];
                     $email=$_REQUEST['email'];
                     $mob=$_REQUEST['mob'];
                     $apass=md5($_REQUEST['apass']);
                        $img=$_FILES['img']['name'];
                        $path='images/upload/'.$img;
                        $tmp_file=$_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_file,$path);
                     
                     $data=array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"mob"=>$mob,"apass"=>$apass,"img"=>$img);
                     $res=$this->insert('admins',$data);
                     if($res){
                        echo"<script>
                        alert('Registered Successfully...');
                        window.location='';
                       </script>";
                     }
                     else{
                        echo"<script>
                        alert('Registeration Failed...');
                        </script>";
                     }
                  

               }
               include_once('admin_signup.php');
               break;
//----------------------------------------------------------View Managers for admin code------------------------------------------------------------
            case '/view_managers':
               if(!$_SESSION['aid']){
                  echo"<script>
                  alert('Please login as admin to view...');
                  window.location='login';
                  </script>";
              }
               $manager_arr=$this->select('managers');
               include_once('view_managers.php');
               break;
//----------------------------------------------------------View Medicines for admin code------------------------------------------------------------      
            case '/view_medicines':
               if(!$_SESSION['aid']){
                  echo"<script>
                  alert('Please login as admin to view...');
                  window.location='login';
                  </script>";
              }
               $medi_arr=$this->select_join2('medicine','managers','medicine.added_by=managers.mid');
               include_once('view_medicines.php');
               break;
//----------------------------------------Manager Signup Code----------------------------------------------------
            case '/manager_signup':
              if($_SESSION['aid'] || $_SESSION['mid']){
                  echo"<script>
                  alert('Please logout for signup...');
                  window.location='dashboard';
                  </script>";
              }
              if(isset($_REQUEST['submit'])){
                  $name=$_REQUEST['name'];
                  $email=$_REQUEST['email'];
                  $mob=$_REQUEST['mob'];
                  $mpass=md5($_REQUEST['mpass']);
                  $ph_name=$_REQUEST['ph_name'];
                     $img=$_FILES['img']['name'];
                     $path='images/upload/'.$img;
                     $tmp_file=$_FILES['img']['tmp_name'];
                     move_uploaded_file($tmp_file,$path);
                  
                  $data=array("name"=>$name,"email"=>$email,"mob"=>$mob,"mpass"=>$mpass,"img"=>$img,"ph_name"=>$ph_name);
                  $res=$this->insert('managers',$data);
                  if($res){
                     echo"<script>
                     alert('Registered Successfully...');
                     window.location='';
                    </script>";
                  }
                  else{
                     echo"<script>
                     alert('Registeration Failed...');
                     </script>";
                  }
               

            }
               include_once('manager_signup.php');
               break;
            
            case '':
               include_once('.php');
               break;   


           

        }
    }

}
$obj = new control;
?>