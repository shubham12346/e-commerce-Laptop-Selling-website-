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
        <a class="navbar-brand active  p-1 m-1" href="#"
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
              <a class="nav-link" href="profile.php">  
                <?php
                if(isset($_SESSION["user"]))
                {
                  echo $_SESSION["user"];
                }
                else{
                  echo "Profile";
                }
                ?>

              </a>
            </li>
            <li class="nav-item p-1 m-1">
              <a class="nav-link" href="category.php">Category</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


    <!--  image board -->
    <section class="container-fluid bg-secondary">
     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!--
          <div class="carousel-item ">
            <img src="img/a1.png" class="d-flex w-50" alt="..." />
          </div>

           -->

          <div class="carousel-item active">
                 <div class="card bg-secondary text-white" >
                    <img class="card-img w-50 ms-auto  me-auto" src="img/a1.png" alt="Card image">
                       <div class="card-img-overlay">
                          <h5 class="card-title">Inspiron Laptops & 2-in-1 PCs</h5>
                          <!--
                            <p class="card-text">Whether it's checking email, posting on social media or streaming music & movies, Inspiron keeps you connected to what matters most to you | Buy Directly from Dell.com</p>
                            <p class="card-text text-muted">For Everyday Access Starting at ₹ 40,490.00</p>
                       -->


                        </div>
                          <div class="card-footer text-white text-center">Footer</div>
                    </div>
                  
            </div>

          <div class="carousel-item">
                 <div class="card bg-secondary text-white">
                 <img class="card-img w-50 ms-auto  me-auto" src="img/a2.png"  alt="Card image">
                     <div class="card-img-overlay">
                        <h5 class="card-title h4 ">XPS Laptops</h5>
                           
               </div>
                    <div class="card-footer text-white text-center">Some best Selling </div>
            </div>
          </div>


          <div class="carousel-item">
             <div class="card card bg-secondary text-white">
                 <img class="card-img w-50 ms-auto me-auto"  src="img/a3.png"  alt="Card image">
                     <div class="card-img-overlay">
                        <h5 class="card-title h4">G Series Gaming Laptops</h5>
                          
               </div>

            </div>
                  <div class="card-footer text-white text-center">Footer</div>
           </div>

           

         
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>


<!-- Some Popular products -->
<section class="container">
<div class="card-group">
  <div class="card m-3 border">
    <img class="card-img-top w-50" src="img/l1.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="http://"> Vostro 14 3401 Laptop</a></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Features</small></p>

       <div class="card-text">

           <ul class="list-group list-group-flush">
         <li class="list-group-item">   
            Windows 10 Home Single Language
         </li>
         <li class="list-group-item">
            Intel® UHD Graphics
        </li>
          <li class="list-group-item">
            8 GB, 1 x 8 GB, DDR4, 2666 MHz
        </li>
           <li class="list-group-item">
            1 TB, 5400 RPM, 2.5-inch, SATA, HDD, 128 MB cache
        </li>
           <li class="list-group-item">
             35.5-cm. display
          </li>
          <li class="list-group-item">
                Price ₹ 35,990.01
               </li>
               <li class="list-group-item">
                    <button class="btn bg-success">
                      Buy Now
                    </button>
               </li>
</ul>
       </div>

 
    </div>
  </div>
  <div class="card m-3 border" >
    <img class="card-img-top w-50" src="img/l2.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="http://" target="_blank" rel="noopener noreferrer"> Inspiron 14 Laptop</a></h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Features</small></p>

          <div class="card-text">

           <ul class="list-group list-group-flush">
                <li class="list-group-item">   
                  
                 11th Gen Intel® Core™ i5-11320H 
               </li>
                <li class="list-group-item">
                  
            Windows 11 Home Single Language
        
                </li>
                <li class="list-group-item">
                 
            Intel® Iris® Xe Graphics
        
                </li>
                <li class="list-group-item">
                 
            16 GB, 2 x 8 GB, DDR4, 3200 MHz 
            
            ,    35.5-cm. display

        
                </li>
               <li class="list-group-item">
                  
            512 GB, M.2, PCIe NVMe, SSD
        
               </li>
               <li class="list-group-item">
                Price ₹ 66,489.98
               </li>
               <li class="list-group-item">
                    <button class="btn bg-success">
                      Buy Now
                    </button>
               </li>
            </ul>
       </div>

    </div>
  </div>
  <div class="card m-3 border">
    <img class="card-img-top w-50" src="img/l3.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><a href="http://" target="_blank" rel="noopener noreferrer">Vostro 3510 Laptop</a></h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

      <div class="card-text">

           <ul class="list-group list-group-flush">
                <li class="list-group-item">   
                  
                 11th Gen Intel® Core™ i5-1135G7 (8 MB cache, 4 cores, 8 threads, up to 4.20 GHz Turbo)


               </li>
                <li class="list-group-item">
                  
            Windows 11 Home Single Language, English
        
                </li>
                <li class="list-group-item">
                 
            Intel® UHD Graphics
        
                </li>
                <li class="list-group-item">
                 
           8 GB, 1 x 8 GB, DDR4, 3200 MHz

        
                </li>
               <li class="list-group-item">
                  
           512 GB, M.2, PCIe NVMe, SSD
               </li>
               <li class="list-group-item">
                 Price  ₹ 35,990.01
               </li>
               <li class="list-group-item">
                    <button class="btn bg-success">
                      Buy Now
                    </button>
               </li>
            </ul>
       </div>
    </div>
  </div>
</div>
</section>


<!-- A banner -->

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

<div class="container">
  <footer class="mx-3 py-3">
    <ul class="nav justify-content-center  mb-2 mb-lg-0  fs-5">
      <li class="nav-item p-1 m-4"><a href="#" class="nav-link" >Home</a></li>
      <li class="nav-item p-1 m-4"><a href="contactus.php" class="nav-link">Contact</a></li>
      <li class="nav-item p-1 m-4"><a href="category.php" class="nav-link">Category</a></li>
      <li class="nav-item p-1 m-4 "> <a href="login.php" class="nav-link">Login</a></li>
      
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
