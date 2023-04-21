
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index"><img class="logo_icon img-responsive" src="backend/assets/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="backend/assets/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Priyanka Solanki</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Tables & Dashboard</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                     </li>

                  
                     <li class="">
                        <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Products</span></a>
                        <ul class="collapse list-unstyled" id="product">
                           <li>
                              <a href="">> <span>Add Products</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Products</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li class="active">
                        <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Categories</span></a>
                        <ul class="collapse list-unstyled" id="category">
                           <li>
                              <a href="">> <span>Add Categories</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Categories</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li class="">
                        <a href="#type" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Types</span></a>
                        <ul class="collapse list-unstyled" id="type">
                           <li>
                              <a href="">> <span>Add Types</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Types</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li class="">
                        <a href="#subtype" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Sub Types</span></a>
                        <ul class="collapse list-unstyled" id="subtype">
                           <li>
                              <a href="">> <span>Add Sub Types</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Sub Types</span></a>
                           </li>
                           
                        </ul>
                     </li>
                     <li class="">
                        <a href="#size" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Size</span></a>
                        <ul class="collapse list-unstyled" id="size">
                           <li>
                              <a href="">> <span>Add Size</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Size</span></a>
                           </li>  
                        </ul>
                     </li>
                     <li class="">
                        <a href="#color" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Colors</span></a>
                        <ul class="collapse list-unstyled" id="color">
                           <li>
                              <a href="">> <span>Add Color</span></a>
                           </li>
                           <li>
                              <a href="project">> <span>Manage Color</span></a>
                           </li>  
                        </ul>
                     </li>
                     <li class="">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Users</span></a>
                        <ul class="collapse list-unstyled" id="users">
                           <li>
                              <a href="">> <span>Manage Users</span></a>
                           </li>
                        </ul>
                     </li>
                     <li class="">
                        <a href="#feedback" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>feedback</span></a>
                        <ul class="collapse list-unstyled" id="feedback">
                           <li>
                              <a href="">> <span>Manage feedback</span></a>
                           </li>
                        </ul>
                     </li>
                     <li class="">
                        <a href="#orders" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Orders</span></a>
                        <ul class="collapse list-unstyled" id="orders">
                           <li>
                              <a href="">> <span>Manage Orders</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index" class="top" style="color: white; font-weight: bold; font-size:25px;"><img class="img-responsive" src="backend/assets/images/logo/logo.png" alt="#" />ADMIN PANEL</a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="backend/assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Priyanka Solanki</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile">My Profile</a>
                                       <a class="dropdown-item" href="settings">Settings</a>
                                       <a class="dropdown-item" href="help">Help</a>

                                       <a class="dropdown-item" href="logout"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
