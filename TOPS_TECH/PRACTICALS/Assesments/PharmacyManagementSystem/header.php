<html lang="en">
    <head></head>
<body>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Dashboard</title>



   
    <section class="topber" style="background-color:;">
        <div class="topber__title">
            <span class="topber__title--text">
                Pharmacy Management System
            </span>
        </div>
 <!--------------------------------- If Admin Has Logged In-------------------------------->

<?php 

if(isset($_SESSION['aid'])) {  
?>
        <div class="topber__profile">
                            <img src="images/upload/<?php  echo $_SESSION['img'] ?>" height="25" width="25" class="rounded-circle" alt="no image found">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="logout?logoutbtn=admin">Log Out</a>
                    </div>
                </div>
        </div>
<!--------------------------------- If Manager Has Logged In-------------------------------->
<?php } ?>
<?php 
if(isset($_SESSION['mid'])) {  
    ?>
        <div class="topber__profile">
                            <img src="images/upload/<?php echo $_SESSION['img'] ?>" height="25" width="25" class="rounded-circle" alt="no image found">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['name'] ?></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item"  href="logout?logoutbtn=manager">Log Out</a>
                    </div>
                </div>
        </div>
<?php } 
 ?>
</section>
<!--------------------------------- Sideber -------------------------------->
    <section id="sideber" class="sideber">
        <ul class="sideber__ber">
            <h3 class="sideber__panel"><i id="left" class="fas fa-laugh-wink"></i> PMS</h3>
                <!-----------------------------------------------For Manager ----------------------------------------------->
                <?php 
                    if(isset($_SESSION['mid'])) {  ?>
                        <li id="left" class="sideber__item sideber__item--modify active">
                            <a href="add_medicine"><i id="left" class="fas fa-user-plus"></i>Add Medicine</a>
                        </li>
                        <li id="left" class="sideber__item">
                            <a href="manage_medicine"><i id="left" class="fas fa-user"></i>View/Delete Medicine</a>
                        </li>
                <?php } 
                ?>
                 <!-----------------------------------------------For Admin ----------------------------------------------->
                 <?php 
                    if(isset($_SESSION['aid'])) {  ?>
                        <li id="left" class="sideber__item sideber__item--modify">
                            <a href="view_managers"><i id="left" class="fas fa-user"></i>View Managers</a>
                        </li>
                        <li id="left" class="sideber__item">
                            <a href="view_medicines"><i id="left" class="fas fa-user"></i>View Medicines</a>
                        </li>
                <?php } 
                ?>
        </ul>
        <footer class="text-center"><span>PMS</span><br>Created By: Priyanka Solanki</footer>
    </section>
    

