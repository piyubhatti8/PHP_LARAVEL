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
			
            case '/signup':
                if(isset($_REQUEST['submit']))
                {
                    //$name = mysqli->real_escape_string($_REQUEST['name']);
                $name=$_REQUEST['name'];
                $mobile=$_REQUEST['mobile'];
                $unm=$_REQUEST['unm'];
                $pass=$_REQUEST['pass'];
                    $enc_pass=md5($pass);
                $gen=$_REQUEST['gen'];               
                $lang_arr=$_REQUEST['lang'];
                    $lang =implode(",", $lang_arr);
                $cid=$_REQUEST['cid'];
                $file=$_FILES['file']['name'];
                    $path='images/upload/customer/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);

                //date_default_timezone_set('asia/calcutta');
                //$created_dt=date("Y-m-d H:i:s");
                //$updated_dt=date("Y-m-d H:i:s");
                $data = array("name"=>$name,"mobile"=>$mobile,"unm"=>$unm,"pass"=>$enc_pass,"gen"=>$gen,"lang"=>$lang,"cid"=>$cid,"file"=>$file);
                    $res=$this->insert('user',$data);
                    if ($res)
                    {
                        echo "<script>
                        alert('Registered Successfully..');
                        </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Not Registered');
                        </script>";
                    }

                }
                $country=$this->select('country_tbl');
                include_once('signup.php');
                break;

            case '/login':
                if (isset($_REQUEST['submit'])) {
                    $unm = $_REQUEST['unm'];
                    $pass = $_REQUEST['pass'];
                    $enc_pass = md5($pass);
                    $where = array("unm" => $unm, "pass" => $enc_pass);
                    $run = $this->select_where('user', $where);
                    $chk = $run->num_rows;
                    $fetch = $run->fetch_object();
                    if ($chk == 1) {
                        if($fetch->status=="Unblocked"){
                            $_SESSION['unm'] = $fetch->unm;
                            $_SESSION['uid'] = $fetch->uid;
                            $_SESSION['name'] = $fetch->name;
                            echo "<script>
                            alert('Login Success');
                            window.location='profile';
                            echo </script>";
                        } 
                        else {
                            echo "<script>
                            alert('Your account has been blocked');
                            window.location='logout';
                            window.location='login';
                            echo </script>";
                        }
                        
                    }
                    else
                    {
                        echo "<script>
                        alert('Login Failed');
                        echo </script>"; 
                       // echo "Login Failed";

                    }
                    
                }

                    include_once('login.php');
                    break;
                case '/logout':
                    unset ($_SESSION['unm']);
                    unset ($_SESSION['uid']);
                    unset ($_SESSION['name']);
                echo "<script>
                    alert('You have been logged out..');
                    window.location='login';
                    </script>";
                    break;
            case '/profile':
                
                $where = array("user.uid"=>$_SESSION['uid']);
                $run=$this->select_where_join('user','country_tbl','user.cid=country_tbl.cid',$where);
                $fetch = $run->fetch_object();
                       
                        include_once('profile.php');
                        break;
            case '/edituser':
                $country=$this->select('country_tbl');
                if(isset($_REQUEST['btnedit'])){
                    $uid = $_REQUEST['btnedit'];
                    $where = array("uid"=>$uid);
                    $run = $this->select_where('user',$where);
                    //print_r($run);
                    $fetch = $run->fetch_object();
                    
                    if(isset($_REQUEST['submit']))
				    {
                        $name = $_REQUEST['name'];
                        $unm = $_REQUEST['unm'];
                        $mobile = $_REQUEST['mobile'];
                        $gen = $_REQUEST['gen'];
                        $lang = $_REQUEST['lang'];
                        $lang = implode(",",$lang);
                        $cid = $_REQUEST['cid'];
                        if($_FILES['file']['size']>0){
                            $file = $_FILES['file']['name'];
                            $path = "images/upload/customer/".$file;
                            $tmp_file=$_FILES['file']['tmp_name'];
                            move_uploaded_file($tmp_file, $path);
                            $data = array("name"=>$name,"unm"=>$unm,"mobile"=>$mobile,"gen"=>$gen,"lang"=>$lang,"cid"=>$cid,"file"=>$file);
                            $old_file = $fetch->file;
                            $res = $this->update('user',$data,$where);
                            if($res){
                                unlink("images/upload/customer/".$old_file);
                                echo "<script>
                                alert('Update Success');
                                window.location='profile';
                                </script>";
                            }
                            else{
                                echo "<script>
                                alert('Update Failed');							
                                </script>";
                            }
                        }
                        else {
                            $data = array("name"=>$name,"unm"=>$unm,"mobile"=>$mobile,"gen"=>$gen,"lang"=>$lang,"cid"=>$cid);
                            $old_file = $fetch->file;
                            $res = $this->update('user',$data,$where);
                            if($res){
                              
                                echo "<script>
                                alert('Update Success');
                                window.location='profile';
                                </script>";
                            }
                            else{
                                echo "<script>
                                alert('Update Failed');							
                                </script>";
                            }
                        }
                        


                        
                    }
                    
                }
            
                include_once('edituser.php');
                break;        
               
		
            }
    }

}
$obj = new control;
?>