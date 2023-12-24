<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Orders </title>
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
                            <h6 class="mb-4"> Here are All Orders </h6>
                               <!-- === alert ===-->
                               <?php if (session()->getFlashdata('msg')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo session()->getFlashdata('msg'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            <?php endif; ?>
                            <!-- ====== -->
                            <div class="table-responsive">
                                <table class="table">
<thead>
<tr>
    <th scope="col">#</th>
    <th scope="col"> User Name </th>
    <th scope="col">Mobile</th>
    <th scope="col">Course Name</th>
    <th scope="col">Price</th>
    <th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php 
    $num = 0;
foreach( $orders as $item ) :  ?>
<tr>
    <th scope="row"> <?php echo ++$num ?> </th>
    <td> <?php echo $item['user_name'] ?> </td>
    <td> <?php echo $item['mobile'] ?> </td>
    <td> <?php echo $item['course_name'] ?> </td>
    <td> <?php echo $item['price'] ?> </td>
    <td> <a href="<?php echo base_url('orders/delete/'.$item['id']) ?>  "><button class="btn btn-danger" onclick=" return confirm('Are you sure to Delete') ">  Delete </button></a> 

    <a href="<?php echo base_url('orders/edit/'.$item['id']) ?>  "><button class="btn btn-warning"> Edit </button></a>
</td>
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

