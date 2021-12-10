<?php
  include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>John Doe</title>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;600&family=Montserrat&display=swap"
    rel="stylesheet">
  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <!-- Data Tables -->
  <link rel="stylesheet" href="../assets/plugins/DataTables/css/dataTables.bootstrap5.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/FontAwesome/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- jQuery 3.6 -->
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">KA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
          // Cek Session Login
          if(isset($_SESSION["login"])){
        ?>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/katalog/dashboard">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="product.php">Data Product</a></li>
                  <li><a class="dropdown-item" href="category.php">Category</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="frm_product.php">Add New</a></li>
                </ul>
              </li>            
              <li class="nav-item">
                <a class="nav-link" href="slideshow.php">Slideshow</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages.php">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="users.php">Users</a>
              </li>
            </ul>
            <div class="ms-5 dropdown btn-user">
              <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                aria-expanded="false">
                <?php echo $_SESSION["profile"]["nama"]; ?>
              </a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Ganti Password</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        <?php
          }
          // End Cek Session Login
        ?>
      </div>
    </nav>
  </header>
  <!--  End Header  -->