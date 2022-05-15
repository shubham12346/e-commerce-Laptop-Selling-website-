<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <a href="index.php" class="navbar-brand m-1 p-1"> <img src="img/logo.png" width="30" height="24">DELL </a>
        </div>

    </nav>


    <section>

        <div class="container-fluid bg-secondary bg-gradient  " style="height: 715px;">


            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <form action="adminLogin.php" method="post" class="container bg-light bg-gradient  m-4 shadow-lg w-75 rounded-3">


                        <div class="text-center">
                            <h2>Admin  Log in </h2>

                        </div>


                        <div class="mb-3 mt-2 w-75  ms-5">
                            <label for="exampleInputEmail1" class="form-label mt-5">Email </label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


                        </div>

                        <div class="mb-3 w-50 ms-5">
                            <label for="exampleInputPassword1" class="form-label mt-2">Password</label>
                            <input type="password" class="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>



                        <button type="submit" class="btn btn-primary ms-5 mb-5">Login</button>
                        <br>
                        <div class="d-block">
                            <a class="ms-4 text-center" href="register.html">Don't have an account. Register ?</a>

                        </div>

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

                            $email = $_POST["email"];
                            $passd = $_POST["password"];
                            $sql = "SELECT * FROM `admin` WHERE `email`= '$email' AND `password`='$passd'";
                            
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {

                                $_SESSION["Aduser"]= $email;

                                echo "<script>
                                alert('User successfully Logged in  ') ;
                                window.location.href='productMngt.php'
                                 
                            </script> ";
                            } else {
                                echo "0 results";
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                        }
                    }

                    ?>


                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>