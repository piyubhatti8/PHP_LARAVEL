

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Dashboard</title>
</head>

<body>

    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

            <div class="main__form">
                <div class="main__form--title text-center">Log In</div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-envelope left"></i>
                                <input type="text" name="email" placeholder="Email" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="pass" placeholder="Password" required>
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-male left"></i>
                                <select name="role" id="Role">
                                    <option value="admin">Admin</option>
                                    <option value="manager">Manager</option>
                                </select>
                            </label>
                        </div>
                            <input type="hidden" name="action" value="login">
                                    <div class="col col-12">
                                        <input type="submit" name="submit" value="Login">
                                    </div>
                                    
                                    <div class="col col-12">
                                    <br>
                                        <label style="font-weight: bold;">If not registered than register here....</label>
                                        
                                    </div>
                                    <div class="col col-12">  
                                    <a style="color:white; font-weight: none;" href="admin_signup" >Register as Admin</a>
                                    </div>
                                    <div class="col col-12">  
                                        <a style="color:white; font-weight: none;;" href="manager_signup" >Register as Manager</a>
                                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------------------------- #Main section -------------------------------->



    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
