<?php include_once("conn.php");
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
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>Mobile No.:</td>
                <td><input type="number" name="mob"></td>
            </tr>
            <tr>
            
                <td cellspan="2"><input type="submit" name="submit" value="Insert"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_REQUEST['submit']))
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $pass=$_REQUEST['pass'];
        $mob=$_REQUEST['mob'];
        
        $query="insert into user_tbl (`name`,`email`,`pass`,`mob`) values ('$name','$email','$pass','$mob')";
        $data=mysqli_query($conn,$query);

        if($data){
           echo"
            <script>
                alert('Record has been added...');
                window.location.href='http://localhost/phpmyadmin/';
            </script>";
        }
        else{
            echo"<script>
            alert('Error in adding...');
        </script>";
        }
           
    }

    ?>
</body>
</html>
