
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
      <a class="navbar-brand active p-1 m-1" href="#"><img src="img/logo.png" width="30" height="24" />Dell</a>
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
            <a class="nav-link" aria-current="page" href="#">Cart</a>
          </li>
          <li class="nav-item p-1 m-1">
            <a class="nav-link" href="register.php">Sign in</a>
          </li>
          <li class="nav-item p-1 m-1">
            <a class="nav-link" href="category.php">Category</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--End    of Navbar -->




  <section style="margin-bottom: 105px">

    <?php
    $server1 = "localhost";
    $user1 = "root";
    $password1 = "";
    $database1 = "lsw";
    $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
    if (!($conn1)) {
      die('Conection failed' . mysqli_connect_errno());
    } else {
      $productid = $_GET["id"];

      $sql = "SELECT * FROM `productn` WHERE `pid`='$productid'";
      $result = mysqli_query($conn1, $sql);
      if (mysqli_num_rows($result) > 0) {
    ?>

        <div class="container">
          <div class="row bg-light">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>

              <div class="col-lg-6">
                <!-- Image slider -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo $row["p_image"] ?>" class="d-block w-75 ms-auto me-auto" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo $row["p_image"] ?>" class="d-block w-75 ms-auto me-auto" alt="..." />
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo $row["p_image"] ?>" class="d-block w-75 ms-auto me-auto" alt="..." />
                    </div>
                  </div>
                  <button class="carousel-control-prev bg-secondary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>

                  <button class="carousel-control-next bg-secondary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="container">
                  <h2> <?php echo $row["name"]; ?> </h2>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <?php echo $row["os"]; ?> </li>



                    <li class="list-group-item"> <?php echo $row["internal"]; ?> </li>
                    <li class="list-group-item"> <?php echo $row["description"]; ?> </li>
                    <li class="list-group-item"> <?php echo $row["screensize"]; ?> </li>
                    <li class="list-group-item"> Price ₹ <?php echo $row["price"]; ?> </li>
                    <li class="list-group-item">
                      <a href="userOrder.php?product=<?php echo $row["pid"]?>"> <button class="btn bg-success">Place a order</button></a>

                    </li>
                  </ul>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
    <?php
      }
    }
    ?>

    <!-- Button trigger modal -->


    <!-- Modal -->












  </section>

  <div class="container">
    <footer class="mx-3 py-3">
      <ul class="nav justify-content-center mb-2 mb-lg-0 fs-5">
        <li class="nav-item p-1 m-4">
          <a href="index.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item p-1 m-4">
          <a href="contactus.html" class="nav-link">Contact</a>
        </li>
        <li class="nav-item p-1 m-4">
          <a href="category.html" class="nav-link">Category</a>
        </li>
        <li class="nav-item p-1 m-4">
          <a href="login.html" class="nav-link">Login</a>
        </li>
      </ul>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>