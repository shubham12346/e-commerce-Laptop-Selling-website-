<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div >
                <a href="index.php" class="navbar-brand m-1 p-1"> <img src="img/logo.png" width="30" height="24">DELL </a>
            </div>

        </nav>
  

        <section>

            <div  class="container-fluid bg-secondary bg-gradient  " style="height: 715px;" >
              

                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
         <form action="register.php" method="POST" class="container bg-light bg-gradient  m-4 shadow-lg w-75 rounded-3">


              <div class="text-center">
                    <h2> Create Account </h2>
                    
                </div>


                <div class="mb-3 mt-2 w-75  ms-5">
                  <label for="exampleInputEmail1" class="form-label mt-5">Full Name </label>
                 <input type="text" class="form-control" name="fname" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              
                
            </div>

             <div class="mb-3 w-75 ms-5">
                  <label for="exampleInputEmail1" class="form-label mt-2">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3 w-50 ms-5">
                 <label for="exampleInputPassword1" class="form-label mt-2">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
            </div>

            <div class="mb-3 form-check ms-5">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Agree on terms and Condition</label>
            </div>

             <button type="submit" class="btn btn-primary ms-5 mb-5">Register</button>
             <br>
             <div class="d-block">
                  <a class="ms-4 text-center"href="login.php">Already have a account login ?</a>

             </div>
            
        </form>

            <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $server = "localhost";
                $user = "root";
                $password = "";
                $database = "lsw";
                $conn = mysqli_connect($server, $user, $password, $database);
                if (!($conn)) {
                    die('Conection failed' . mysqli_connect_errno());
                } else {
                        $name=$_POST["fname"];
                        $email =$_POST["email"];
                        $passd =$_POST["password"];
                        $sql = "INSERT INTO `user`( `Name`, `email`, `pass`) VALUES (' $name ','$email','$passd')";

                        if(mysqli_query($conn,$sql))
                        {
                            echo "<script>
                                alert('User successfully Registrated ') ;
                                 window.location.href='login.php';
                            </script> " ;
                            
                        }
                        else{
                        echo "<script>
                                alert('User Regsitration failed ') ;
                                
                            </script> ";
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