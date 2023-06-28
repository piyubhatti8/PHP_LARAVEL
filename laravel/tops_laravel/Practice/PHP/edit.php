<?php include_once("conn.php");
$uid=$_REQUEST['uid'];
$query="select * from user_tbl where uid='".$uid."'";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($data);
?>

<html>
<head>
    <title>Insert User</title>
</head>

<body>
    <form  action="" method="post" enctype="multipart/form-data">
        <h1>User Insert Form</h1>
        <table align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $row['email']?>"></td>
            </tr>
            <tr>
                <td>Mobile No.:</td>
                <td><input type="number" name="mob" value="<?php echo $row['mob'] ?>"></td>
            </tr>
            <tr>
            
                <td cellspan="2"><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    <?php
   if(isset($_REQUEST['submit'])){
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $mob=$_REQUEST['mob'];
        $edit="update user_tbl set name='$name',email='$email',mob='$mob' where uid='$uid'";
        //$edit="update user_tbl set name='".$name."',email='".$email."', mob='".$mob."' where uid='".$uid."'";
        $update=mysqli_query($conn,$edit);

        if($update){
            echo "<script>
            alert('Record has been updated...');
            window.location.href='http://localhost/Practice/PHP/view.php';
        </script>";
        }
        else{
            echo "<script>
            alert('Error in updating..');
            <script>";
        }
      

   }
    ?>
</body>
</html>
