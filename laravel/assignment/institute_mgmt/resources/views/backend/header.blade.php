<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('backend/assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('backend/assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('backend/assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('backend/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('backend/assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{url('backend/assets/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('admin_index')}}">Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('table')}}">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="{{url('form')}}">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{url('admin_login')}}">Login</a>
                                </li>
                                <li>
                                    <a href="{{url('admin_register')}}">Register</a>
                                </li>
                                <li>
                                    <a href="{{url('admin_forgetpass')}}">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

    <!-- Jquery JS-->
    <script src="{{url('backend/assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('backend/assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('backend/assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('backend/assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('backend/assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('backend/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('backend/assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('backend/assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{url('backend/assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
