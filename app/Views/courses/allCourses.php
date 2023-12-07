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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4"> Here are All the Courses </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Course Name </th>
                                            <th scope="col">Catagory</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                         $num = 0;
                                        foreach( $courses as $course ) :  ?>
                                        <tr>
                                            <th scope="row"> <?php echo ++$num ?> </th>
                                           <td> <?php echo $course['course'] ?> </td>
                                           <td> <?php echo $course['category'] ?> </td>
                                           <td> <?php echo $course['price'] ?> </td>
                                           <td> <?php echo $course['desc'] ?> </td>
                                        </tr>
                                        <?php endforeach ; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


            <!-- Footer Start -->
       <?php echo $this->include('includes/footer.php'); ?>
</body>

</html>

