<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>




    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fs-4 sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand active  p-1 m-1" href="index.php"
          ><img src="img/logo.png" width="30" height="24" />Dell</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex">
            <input
              class="form-control me-2"
              id="navbarSearch"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item p-1 m-1">
              <a class="nav-link" aria-current="page" href="#">Cart</a>
            </li>
            <li class="nav-item p-1 m-1">
              <a class="nav-link" href="profile.php"> <?php
              if(isset($_SESSION["user"]))
              {
                echo $_SESSION["user"];
              }
              ?></a>
            </li>
            <li class="nav-item dropdown p-1 m-1">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Category
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div> <a href="index.html">Home</a> > <a href="#" class="active">Contact</a></div>

    <section class="bg-secodary" style="height: 525px; ">
            <div class=" container w-50">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Expalin your Question </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary ms-5 mb-5">Submit Querry</button>
            </div>

    </section>
            

<div class="container">
  <footer class="mx-3 py-3">
    <ul class="nav justify-content-center  mb-2 mb-lg-0  fs-5">
      <li class="nav-item p-1 m-4"><a href="#" class="nav-link" >Home</a></li>
      <li class="nav-item p-1 m-4"><a href="#" class="nav-link">Contact</a></li>
 
      <li class="nav-item p-1 m-4 "> <a href="#" class="nav-link">Login</a></li>
      
    </ul>

  </footer>
</div>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
