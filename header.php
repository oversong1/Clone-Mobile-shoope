<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shoop</title>

    <!-- Boostrap CSS  CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Owl-carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
    
    <!-- Custom Global CSS -->
    <link rel="stylesheet" href="style.css">

    <?php
      // require functions.php file
      require('functions.php')  
    ?>

</head>
<body>

    <!--START #HEADER -->
    
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-20 text-black-50 m-0">Jordan Calderon 000-001 Eleifend St.Duluth Washinton 90000-1111</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Whishlist(0)</a>
            </div>
        </div>

        <!-- START Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <a class="navbar-brand" href="index.php">Mobile Shopee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On Sale<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Coming Soon</a>
                </li> 
              </ul>
              <form action="#" class="font-size-14 font-rale">
                 <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                     <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                     <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
                 </a>       
              </form>
            </div>
          </nav>

           <!-- END Primary Navigation -->

    </header>
    
    <!-- END #HEADER -->
    
    <!--START #MAIN-SITE -->
        <main id="main-site">