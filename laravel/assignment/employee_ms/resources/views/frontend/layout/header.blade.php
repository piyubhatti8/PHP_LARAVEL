<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{url('frontend/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <!-- Topbar Start -->
    <div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a href="index" class="nav-item nav-link ">Home</a>
                    <span class="text-muted px-2"></span>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <span class="text-muted px-2"></span>
                    <a href="login_user" class="nav-item nav-link">Login</a>
                    <span class="text-muted px-2"></span>
                    <a href="signup_user" class="nav-item nav-link">Register</a>
                </div>
            </div>
    
        </div>
       
    </div>
    <!-- Topbar End -->

