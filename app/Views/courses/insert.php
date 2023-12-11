<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
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
    <link href="<?php echo base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" <?php echo base_url('css/bootstrap.min.css') ?> " rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php echo $this->include('includes/sidebar.php') ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php  echo $this->include('includes/navbar.php') ?>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Floating Label</h6>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="Enter Course Name" name="name">
                                <label for="floatingInput">Course</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Price" name="price">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="cat">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Category</label>
                            </div>

                            <div class="form-floating">
                                <textarea name="desc" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
           <?php  echo $this->include('includes/footer.php') ?>
</body>

</html>