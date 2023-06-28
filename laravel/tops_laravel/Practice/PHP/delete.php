<?php include_once("conn.php");
$uid=$_REQUEST['uid'];
$query="delete from user_tbl where uid='$uid'";
$data=mysqli_query($conn,$query);
echo "<script>
    alert('Record has been deleted');    
    window.location.href='http://localhost/Practice/PHP/view.php'
    </script>";
?>