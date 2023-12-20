<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>All Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sidebar Start -->
        <?php echo $this->include('includes/sidebar.php') ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php echo $this->include('includes/navbar.php') ?>
            <!-- Navbar End -->

            <!-- signup start -->
            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>EKT</h3>
                                </a>
                                <h3> Login </h3>
                                <?php
                                if (isset($validation)) {
                                    echo $validation->listErrors();
                                }
                                ?>
                            </div>
                                       <!-- === alert ===-->
           <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('msg'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
    <?php endif; ?>
                            <!-- ====== -->

<form method="post" action="<?php echo base_url('/loginuser') ?>">
   
<div class="form-floating mb-3">
<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
<label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-4">
<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
<label for="floatingPassword">Password</label>
</div>
<div class="d-flex align-items-center justify-content-between mb-4">
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<a href="">Forgot Password</a>
</div>
<button type="submit" class="btn btn-primary py-3 w-100 mb-4">Log In</button>
<p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p>

</form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- signup end -->

            <!-- Footer Start -->
            <?php echo $this->include('includes/footer.php'); ?>
</body>

</html>