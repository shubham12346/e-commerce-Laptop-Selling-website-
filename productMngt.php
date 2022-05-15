<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body {
      font-family: "Lato", sans-serif;

      background-image: fixed;
      background-repeat: no-repeat;

    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }
  </style>

</head>

<body>


  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <button type="button" class="btn btn-secondary ms-4 w-75 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      product
    </button>
    <button type="button" class="btn btn-secondary ms-4 w-75 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal4">
      Edit product
    </button>
    <button type="button" class="btn btn-secondary ms-4 w-75 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
      Orders
    </button>

    <button type="button" class="btn btn-secondary ms-4 w-75 mt-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">
      Add product
    </button>
    <a href="adminLogout.php" class="w-75"> <button type="button" class="btn btn-secondary  w-100  mb-0">
        Log out
      </button></a>

  </div>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"> &#9776; Menu</span>
  <div>
    <img src="img/logo.png" alt="" srcset="" style="margin-left:40% ; margin-top: 10%;">
  </div>
  <section id="product">
    <div class="model1">
      <!-- Button trigger modal -->
      <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
-->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
          <div class="modal-content ">


            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Product Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid ">
              <?php



              $server1 = "localhost";
              $user1 = "root";
              $password1 = "";
              $database1 = "lsw";
              $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
              if (!($conn1)) {
                die('Conection failed' . mysqli_connect_errno());
              }
              echo "sucess";


              $sql1 = "SELECT * FROM `productn` ";
              $result = mysqli_query($conn1, $sql1);

              if (mysqli_num_rows($result) > 0) {
              ?>
                <table class="table">
                  <thead>
                    <td>id</td>
                    <td>Name</td>
                    <td> Os</td>
                    <td> Internal</td>
                    <td>Screensize</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>P_image</td>
                  </thead>
                  <?php

                  while ($row = mysqli_fetch_assoc($result)) {

                  ?>
                    <tr>


                      <td><?php echo $row["pid"]; ?></td>
                      <td> <?php echo $row["name"]; ?></td>
                      <td> <?php echo $row["os"]; ?></td>
                      <td><?php echo $row["internal"]; ?></td>
                      <td><?php echo $row["screensize"]; ?></td>
                      <td><?php echo $row["description"]; ?></td>
                      <td><?php echo $row["price"]; ?></td>
                      <td><?php echo $row["category"]; ?></td>
                      <td><?php echo $row["p_image"]; ?></td>

                    </tr>
                  <?php }
                  ?>

                </table>
              <?php
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
              }





              ?>





            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Product</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="editProduct">
    <div class="model1">
      <!-- Button trigger modal -->
      <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
-->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog model-lg">
          <div class="modal-content">


            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <form action="edit.php" method="POST">
                <table class="table">

                  <h4>Product id should be correct to update or delete </h4>
                  <tr>

                    <td>Enter product Id </td>
                    <td><input type="number" name="productId" id=""> </td>


                  </tr>
                  <tr>
                    <td> Edit Product Name </td>
                    <td><input type="text" name="pname" id=""> </td>
                  </tr>
                  <tr>
                    <td>Edt product price </td>
                    <td><input type="number" name="pprice" id=""> </td>
                  </tr>
                  <tr>
                    <td> Edit Internal </td>
                    <td><input type="text" name="pinternal" id=""> </td>
                  </tr>
                  <tr>
                    <td> Edit OS </td>
                    <td><input type="text" name="pos" id=""> </td>
                  </tr>
                  <tr>
                    <td> Edit Description </td>
                    <td><input type="text" name="pdesc" id=""> </td>
                  </tr>
                  <tr>
                    <td>

                      <button type="submit" class="btn btn-secondary"> Update</button>

                    </td>


                  </tr>

                </table>

              </form>


              <form action="delete.php" method="POST">
                <h2>Delete Product </h2>
                <table class="table">
                  <tr>
                    <td> <input type="number" name="pr" id="" placeholder="Product id here"></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>

                      <button type="submit" class="btn btn-secondary"> Delete</button>
                    </td>
                  </tr>


                </table>


              </form>




            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="order">
    <div class="model1">
      <!-- Button trigger modal -->
      <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
-->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog model-lg">
          <div class="modal-content">


            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <?php



              $server1 = "localhost";
              $user1 = "root";
              $password1 = "";
              $database1 = "lsw";
              $conn1 = mysqli_connect($server1, $user1, $password1, $database1);
              if (!($conn1)) {
                die('Conection failed' . mysqli_connect_errno());
              }
              echo "sucess";


              $sql5 = "SELECT * FROM `uorder`  ";
              $result = mysqli_query($conn1, $sql5);

              if (mysqli_num_rows($result) > 0) {
              ?>
                <table class="table">
                  <thead>
                    <td>id</td>
                    <td>Name</td>
                    <td> Os</td>
                    <td> Internal</td>
                    <td>Screensize</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>P_image</td>
                  </thead>
                  <?php

                  while ($row = mysqli_fetch_assoc($result)) {

                  ?>
                    <tr>


                      <td><?php echo $row["pid"]; ?></td>
                      <td> <?php echo $row["name"]; ?></td>
                      <td> <?php echo $row["os"]; ?></td>
                      <td><?php echo $row["internal"]; ?></td>
                      <td><?php echo $row["screensize"]; ?></td>
                      <td><?php echo $row["description"]; ?></td>
                      <td><?php echo $row["price"]; ?></td>
                      <td><?php echo $row["category"]; ?></td>
                      <td><?php echo $row["p_image"]; ?></td>

                    </tr>
                  <?php }
                  ?>

                </table>
              <?php
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
              }





              ?>


            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="AddProduct">
    <div class="model1">
      <!-- Button trigger modal -->
      <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
-->

      <!-- Modal  Adding product  -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">


            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="productMngt.php" method="post" enctype="multipart/form-data">
                <table class="table">

                  <tr>
                    <td>Product Name </td>
                    <td><input type="text" name="pname"></td>
                  </tr>
                  <tr>
                    <td>Product Category </td>
                    <td>
                      <select name="category">
                        <option value="alien">Alien </option>
                        <option value="vostro">Vostro</option>
                        <option value="insipirion">Insipirion</option>

                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Product image </td>
                    <td><input type="file" name="pimage"></td>
                  </tr>

                  <tr>
                    <td> OS </td>
                    <td><input type="text" name="os"></td>
                  </tr>
                  <tr>
                    <td> Price</td>
                    <td><input type="number" name="price"></td>
                  </tr>
                  <tr>
                    <td> Screen Size</td>
                    <td><input type="number" name="screensize"></td>
                  </tr>
                  <tr>
                    <td> Internal</td>
                    <td><input type="text" name="internal"></td>
                  </tr>
                  <tr>
                    <td> Description</td>
                    <td><input type="text" name="description"></td>
                  </tr>
                </table>
                <button type="submit" class="btn btn-primary">Add product</button>

              </form>

              <?php

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $server = "localhost";
                $user = "root";
                $password = "";
                $database = "lsw";
                $conn = mysqli_connect($server, $user, $password, $database);
                if (!($conn)) {
                  die('Conection failed' . mysqli_connect_errno());
                } else {
                  $fnm = $_FILES["pimage"]["name"];
                  $dst = "./product_image/" . $fnm;
                  move_uploaded_file($_FILES["pimage"]["tmp_name"], $dst);
                  $v1 = rand(111, 999);

                  $imgf = $v1 . "product_image" . $fnm;
                  $sql = "INSERT INTO `productn`(`name`, `os`, `internal`, `screensize`, `description`, `price`, `category`, `p_image`) VALUES ('$_POST[pname]','$_POST[os]','$_POST[internal]','$_POST[screensize]','$_POST[description]','$_POST[price]','$_POST[category]','$imgf')";
                  if (mysqli_query($conn, $sql)) {
                    echo "<script>
                        alert('Succesfully item Added ');

                        </script>";
                  } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                  }
                }
              }


              ?>


            </div>



            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>