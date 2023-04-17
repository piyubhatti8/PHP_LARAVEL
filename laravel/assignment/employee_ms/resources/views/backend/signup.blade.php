<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Footwear Admin Panel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="backend/assets/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="backend/assets/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="backend/assets/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="backend/assets/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="backend/assets/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="backend/assets/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="backend/assets/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="backend/assets/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="backend/assets/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                     <div class="logo_section">
                           <a href="index" class="top p-3" style="color: white; font-weight: bold; font-size:35px;">  EMS ADMIN PANEL</a>
                        </div>
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="" method="post">
                        @csrf
                        <fieldset>
                        <div class="field">
                              <label class="label_field">Name</label>
                              <input type="text" name="name" placeholder="Name" />
                           </div>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="unm" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="pass" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field">Gender</label>
                              <input type="radio" name="gen" placeholder="" value="Female"/>Female
                              <input type="radio" name="gen" placeholder="" value="Male"/>Male
                           </div>
                           <div class="field">
                              <label class="label_field">Languages</label>
                              <div class="field">
                                 <input type="checkbox" name="lang[]" placeholder="" value="Gujarati"/>Gujarati
                                 <input type="checkbox" name="lang[]" placeholder="" value="Hindi"/>Hindi
                                 <input type="checkbox" name="lang[]" placeholder="" value="English"/>English
                              </div>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="pass" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field">Profile</label>
                              <input type="file" name="img" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <input type="submit" name="submit" value="Login" class="main_bt">
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="backend/assets/js/jquery.min.js"></script>
      <script src="backend/assets/js/popper.min.js"></script>
      <script src="backend/assets/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="backend/assets/js/animate.js"></script>
      <!-- select country -->
      <script src="backend/assets/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="backend/assets/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="backend/assets/js/custom.js"></script>
   </body>
</html>