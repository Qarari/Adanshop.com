<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="..\assets/css/style.css">
    <link rel="stylesheet" href="..\assets/css/slick.css">
    <link rel="stylesheet" href="..\assets/css/jquery-ui.css">
    <link rel="stylesheet" href="..\assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="..\assets/css/fontawesome.css">
    <link rel="stylesheet" href="..\assets/css/elegant.css">
    <link rel="stylesheet" href="..\assets/css/plyr.css">
    <link rel="stylesheet" href="..\assets/css/aos.css">
    <link rel="stylesheet" href="..\assets/css/animate.css">
    <link rel="stylesheet" href="..\assets/css/themify-icons.css">
    <link rel="shortcut icon" href="..\assets/images/shortcut_logo.png">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (isset($metaDesc)?$metaDesc:'Demo PHP Shopping Cart')?>">
	<meta name="author" content="Ahsan Zameer">
  
    <title><?php echo (isset($pageTitle)?$pageTitle:'PHP Shopping Cart')?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div id="main">
      <header>
        <div class="header-wrapper">
          <div class="container">
            <div class="header-menu">
              <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-4 col-md-2"><a class="logo" href="\index.html"><img src="..\assets/images/Adan.png" alt="logo"></a></div>
                <div class="col-8 col-md-8">
                  <div class="mobile-menu"><a href="#" id="showMenu"><i class="fas fa-bars"></i></a></div>
                  <nav class="navigation">
                    <ul>
                      <li class="nav-item"><a class="pisen-nav-link " href="\index.html">Home</a><i class="submenu-opener fas fa-plus"></i>
                      <li class="nav-item"><a class="pisen-nav-link active" href="index.php">Produkte</a><i class="submenu-opener fas fa-plus"></i>
                      </li>
                      </li>
                      <li class="nav-item"><a class="pisen-nav-link" href="\about_us.html">Über Uns</a></li>
  
                    </ul>
                  </nav>
                </div>
               
                <div class="col-0 col-xl-2">
                  <div class="menu-function">
                    <div class="social-contact"><a href="\Adan/Benutzerlogin/login.php"><i class="fas fa-user"></i></a></div>
                  </div>  
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
<body>
   <div class="container">
        <div class="row mt-2 mb-2">
            <div class="col-md-12 col-xs-12">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a href="cart.php" style="color:#ffffff">
                    <i class="bi bi-cart4" style="font-size:30px;"></i>
                    <?php 
                        echo (isset($_SESSION['cart_items']) && count($_SESSION['cart_items'])) > 0 ? count($_SESSION['cart_items']):'';
                    ?>
                </a>
            </div>
            
        </nav>