<?php 
session_start();
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>




  <!-- Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fs-4 sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand active  p-1 m-1" href="index.php"><img src="img/logo.png" width="30" height="24" />Dell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
          <input class="form-control me-2" id="navbarSearch" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item p-1 m-1">
            <a class="nav-link active" aria-current="page" href="category.php">Category</a>
          </li>
          
            
          <li class="nav-item p-1 m-1">
            <a class="nav-link" href="profile.php">
               <?php
                  if(isset($_SESSION["user"]))
                  {
                    echo $_SESSION["user"];
                  }else{
                    echo "Profile";
                  }
            ?> 
            
          </a>
          </li>
          
            

        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Banner of Alien  product-->
  <section id="Banner">
    <div class="container-fluid">
      <div class="row justify-content-center w-100">


        <div class="card mb-3 me-2" style="max-width: 1300px; height: 450px;">
          <div class="row g-0">
            <div class="col-md-4 mt-5">
              <img src="img/a3.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body mt-5">
                <h5 class="card-title">Alienware Laptops</h5>
                <p class="card-text"><small class="text-muted">For Immersive Gaming Experiences | Starting at ₹ 1,29,989.99</small></p>
                <p class="card-text">With iconic designs, high-performance gaming and premium features, Alienware delivers the most immersive experiences.</p>
                <a class="btn btn-primary" href="#" role="button">Buy Now</a> <a class="btn btn-outline-primary" href="#" role="button">Add to cart</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

 
  <!-- Some  Ailen  products -->
  <section class="insipirion-database" class="container">
    <?php
    $server1 = "localhost";
    $user1 = "root";
    $password1 = "";
    $database1 = "lsw";
    $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
    if (!($conn1)) {
      die('Conection failed' . mysqli_connect_errno());
    } else {
      $cate = "Alien";
      $sql = "SELECT * FROM `productn` WHERE `category`='$cate'";
      $result = mysqli_query($conn1, $sql);
      $i = 0;
      if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container">


          <div class="card-group">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>
              <div class="card m-3 border">
                <img src="<?php echo $row["p_image"];  ?>" class="card-img-top w-50" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $row["name"]; ?></h5>
                  <p class="card-text"> <?php echo $row["description"]; ?></p>
                  <p class="card-text"><small class="text-muted"> features</small></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <?php echo $row["os"]; ?></li>
                    <li class="list-group-item"> <?php echo $row["internal"]; ?></li>
                    <li class="list-group-item">Price <?php echo $row["price"]; ?></li>

                    <li class="list-group-item"> <a href="product.php?id=<?php echo $row["pid"] ?>" class="btn btn-primary">See Product Detail</a></li>
                  </ul>
                </div>
              </div>

            <?php
              $i++;
              if ($i > 2) {
                break;
              }
            }
            ?>
          </div>

      <?php
      } else {
        echo "no rows found";
      }
    }



      ?>





        </div>
        </div>

  </section>

  <section id="insipirion-banner">
    <div class="container-fluid">
      <div class="row justify-content-center w-100">


        <div class="card mb-3 me-2" style="max-width: 1300px; height: 450px;">
          <div class="row g-0">
            <div class="col-md-4 mt-5">
              <img src="img/a1.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body mt-5">
                <h5 class="card-title">Inspiron Laptops & 2-in-1 PCs</h5>
                <p class="card-text"><small class="text-muted">For Everyday Access Starting at ₹ 40,490.00</small></p>
                <p class="card-text">Whether it's checking email, posting on social media or streaming music & movies, Inspiron keeps you connected to what matters most to you | Buy Directly from Dell.com</p>
                <a class="btn btn-primary" href="#" role="button">Buy Now</a> <a class="btn btn-outline-primary" href="#" role="button">Add to cart</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Some  isipirion  products -->


  <section class="insipirion-database" class="container">
    <?php
    $server1 = "localhost";
    $user1 = "root";
    $password1 = "";
    $database1 = "lsw";
    $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
    if (!($conn1)) {
      die('Conection failed' . mysqli_connect_errno());
    } else {
      $cate = "insipirion";
      $sql = "SELECT * FROM `productn` WHERE `category`='$cate'";
      $result = mysqli_query($conn1, $sql);
      $i = 0;
      if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container">


          <div class="card-group">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>
              <div class="card m-3 border">
                <img src="<?php echo $row["p_image"];  ?>" class="card-img-top w-50" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $row["name"]; ?></h5>
                  <p class="card-text"> <?php echo $row["description"]; ?></p>
                  <p class="card-text"><small class="text-muted"> features</small></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <?php echo $row["os"]; ?></li>
                    <li class="list-group-item"> <?php echo $row["internal"]; ?></li>
                    <li class="list-group-item">Price <?php echo $row["price"]; ?></li>

                    <li class="list-group-item"> <a href="product.php?id=<?php echo $row["pid"] ?>" class="btn btn-primary">See Product Detail</a></li>
                  </ul>
                </div>
              </div>

            <?php
              $i++;
              if ($i > 2) {
                break;
              }
            }
            ?>
          </div>

      <?php
      } else {
        echo "no rows found";
      }
    }



      ?>





        </div>
        </div>

  </section>



  <section class="vostro-database" class="container">
    <?php
    $server1 = "localhost";
    $user1 = "root";
    $password1 = "";
    $database1 = "lsw";
    $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
    if (!($conn1)) {
      die('Conection failed' . mysqli_connect_errno());
    } else {
      $cate = "vostro";
      $sql = "SELECT * FROM `productn` WHERE `category`='$cate'";
      $result = mysqli_query($conn1, $sql);
      $i = 0;
      if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="container">


          <div class="card-group">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>
              <div class="card m-3 border">
                <img src="<?php echo $row["p_image"];  ?>" class="card-img-top w-50" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $row["name"]; ?></h5>
                  <p class="card-text"> <?php echo $row["description"]; ?></p>
                  <p class="card-text"><small class="text-muted"> features</small></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <?php echo $row["os"]; ?></li>
                    <li class="list-group-item"> <?php echo $row["internal"]; ?></li>
                    <li class="list-group-item">Price <?php echo $row["price"]; ?></li>

                    <li class="list-group-item"> <a href="product.php?id=<?php echo $row["pid"] ?>" class="btn btn-primary">See Product Detail</a></li>
                  </ul>
                </div>
              </div>

            <?php
              $i++;
              if ($i > 2) {
                break;
              }
            }
            ?>
          </div>

      <?php
      } else {
        echo "no rows found";
      }
    }



      ?>





        </div>
        </div>

  </section>



  <!-- Some  vostro  products -->



  <!-- A banner of footer-banner  -->

  <section class="container-fluid">
    <div class="card mb-3" style="max-width: 1800px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/l4.png" class="img-fluid rounded-start w-100" alt="image">
        </div>

        <div class="col-md-8">
          <div class="card-body">

            <h5 class="card-title ms-auto ">END OF FINANCIAL YEAR</h5>
            <p class="card-text display-3">ALL YOU NEED IN ONE PLACE </p>
            <p class="card-text h5"> GET INSTANT DISCOUNT ON UPI/NET BANKING ,NO COST EMI , HEADSET AND MORE </p>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!--Footer  -->

  <div class="container">
    <footer class="mx-3 py-3">
      <ul class="nav justify-content-center  mb-2 mb-lg-0  fs-5">
        <li class="nav-item p-1 m-4"><a href="#" class="nav-link">Home</a></li>
        <li class="nav-item p-1 m-4"><a href="contactus.html" class="nav-link">Contact</a></li>
        <li class="nav-item p-1 m-4"><a href="category.html" class="nav-link">Category</a></li>
        <li class="nav-item p-1 m-4 "> <a href="login.html" class="nav-link">Login</a></li>

      </ul>

    </footer>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>