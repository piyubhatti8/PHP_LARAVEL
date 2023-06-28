<?php include_once("conn.php");
?>

<html>
<head>
    <title>View User</title>
</head>

<body>
    <form  action="" method="post" enctype="multipart/form-data">
        <h1>User Insert Form</h1>
        <table align="center" width="100%">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>   
                <td>Password</td>
                <td>Mobile</td>  
                <td>Edit</td>  
                <td>Delete</td>  
                         
            </tr>

            <?php
            $query="select * from user_tbl";
            $data=mysqli_query($conn,$query);
            $count=mysqli_num_rows($data);
            if($count){
                while($row=mysqli_fetch_assoc($data))
                {
                ?>
                <tr>
                    <td><?php echo $row['uid'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>   
                    <td><?php echo $row['pass'] ?></td>
                    <td><?php echo $row['mob'] ?></td>  
                    <td><a name="edit" href="edit.php?uid=<?php echo $row['uid'] ?>">Edit</a></td>  
                    <td><a name="delete" href="delete.php?uid=<?php echo $row['uid'] ?>" onclick="return confirm('Are you sure want to delete')">Delete</a></td>  

                </tr>
                <?php }
             }
            else{
                echo "Norecords found...";
            }
            ?>
        </table>
    </form>
 
</body>
</html>
