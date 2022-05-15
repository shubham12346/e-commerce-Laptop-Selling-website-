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

<body >




    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fs-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand active  p-1 m-1" href="index.php"><img src="img/logo.png" width="30" height="24" />Dell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item p-1 m-1">
                        <a class="nav-link" aria-current="page" href="#">Order</a>
                    </li>
                    <li class="nav-item p-1 m-1">
                        <a class="nav-link" href="category.php">Category</a>
                    </li>

                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <form class="lg" action="userOrder.php" method="POST">
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Product id </label>
                    <input type="text"  value="<?php echo $_GET['product'] ?>" name="product" class="form-control w-50" id=" exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"> You are not allowed to edit product ID</div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Enter Name of Receiver</label>
                        <input type="name" name="fname" class="form-control w-50" id=" exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Enter receievr full Adress</label>
                        <input type="text" name="adress" class="form-control w-50" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Enter Date which expect to deliver</label>
                        <input type="date" name="deliverdate" class="form-control w-50" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Cash on delivery</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>
    <?php




    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include 'connection.php';
        $conn1 = OpenCon();


        $sql = "INSERT INTO `uorder`( `productId`, `address`, `customer`,  `expectDate`,`custEmail`) VALUES ('$_POST[product]','$_POST[adress]','$_POST[fname]','$_POST[deliverdate]','$_SESSION[userEmail]')";
        if (mysqli_query($conn1, $sql)) {
            echo "<script>
                alert('Your order is placed ');
               window.location.href='profile.php';
                </script>";
        }
    }




    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        myproduct(name){
            document.getElementById("product1").value = name;
        }
    </script>
</body>


</html>