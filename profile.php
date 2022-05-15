<?php
session_start();
if (!(isset($_SESSION["user"]))) {
    echo " <script>
     alert('You are not logged in ');
     window.location.href='login.php';
     </script>";
}


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

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item p-1 m-1">

                        <button type="button" class=" nav-link bg-light fs-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <?php
                            if (isset($_SESSION["user"])) {
                                echo $_SESSION["user"];
                            } else {
                                echo "Profile";
                            }
                            ?>
                        </button>

                    </li>
                    <li class="nav-item p-1 m-1">
                        <a class="nav-link" href="category.php"> Category</a>
                    </li>
                    <li class="nav-item p-1 m-1">
                        <a class="nav-link" href="logout.php"> Log out</a>
                    </li>

                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>



    <section class="container">

        <?php
        include 'connection.php';
        $conn = OpenCon();

        $sql = "SELECT * FROM `uorder` WHERE `custEmail` =  '$_SESSION[userEmail] '";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $i = 1;
        ?>
            <table class="table">

                <tr>
                    <th scope="col">S NO</th>
                    <th scope="col">Receiver's Name </th>

                    <th scope="col">Delivery</th>
                    <th scope="col">Payment</th>
                </tr>
                <?php
                $pid[] = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $pid[] = $row["productId"];
                ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td> <?php echo $row["customer"]; ?> </td>
                        <td> <?php echo $row["Delivery"]; ?> </td>
                        <td> <?php echo $row["payment"]; ?> </td>


                    </tr>

                <?php
                    $i++;
                } ?>

            </table>

        <?php
        }

        ?>
    </section>

    <section class="container">
        <table class="table">
            <tr>
                <th scope="col">S.No </th>
                <th scope="col">Product Name</th>
                <th scope="col">Os </th>

                <th scope="col">internal</th>
                <th scope="col">Price</th>
            </tr>
            <?php
            $i = 1;
            foreach ($pid as $pi) {
                
               
                $sql1 = "SELECT * FROM `productn` WHERE `pid`= '$pi'";
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0) {
                  
                    while ($row = mysqli_fetch_assoc($result)) {

            ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td> <?php echo $row["name"]; ?> </td>
                            <td> <?php echo $row["os"]; ?> </td>
                            <td> <?php echo $row["internal"]; ?> </td>
                            <td> <?php echo $row["price"]; ?> </td>


                        </tr>

                    <?php
                        $i++;
                    } ?>






            <?php
                }
            }
            Closecon($conn);
            ?>
        </table>




    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>