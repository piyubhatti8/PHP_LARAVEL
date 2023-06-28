<?php
$conn=mysqli_connect("localhost","root","","practice");
if($conn)
{
    echo "Connection established";
}
else{
    echo "Error in connection";
}

?>