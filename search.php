<?php 
  session_start(); 

//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
//   }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #top_recom {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Merriweather&family=Merriweather+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styleabout.css">
    <link rel="stylesheet" href="style.css">

    <title>OSTELLA</title>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navigations">
        <div class="container-fluid">
            <a class="navbar-brand" href="/project/index.php">OSTELLA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/project/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Hostel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/project/myhostels.php">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/project/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/project/contact.php">Contact Us</a>
                            <?php
                        if($_SESSION['loggin']){
                            echo "</li>
                            <li class='nav-item'>
                       <a class='nav-link'href='index.php?logout='1''>LOGOUT</a>
                        </li>";
                        }
                        ?>
                        <div class="d-flex">
                       <?php
                       if(!$_SESSION['loggin']){
                           echo '<a class="navbar-brand" href="login.php">
                           <img src="https://img.icons8.com/color/48/000000/user.png" alt="" width="30" height="24" class="d-inline-block align-text-top">User Login

                       </a>
                       <a class="navbar-brand" href="admin_login.php">
                           <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-admin-network-technology-itim2101-lineal-color-itim2101-1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">Admin
                           Login

                       </a>';
                       }
                       ?>
                       <?php  if (isset($_SESSION['username'])) : ?>
    	<p><img src="https://img.icons8.com/metro/26/000000/guest-male.png"><button class="btn btn-primary" type="submit"> <a href="myhostels.php" style="color: white; text-decoration:none"><?php echo $_SESSION['username']; ?></a></button> </p>
       <?php endif ?>
            
                </div>
                </ul>
            </div>
    </nav>
    <br><br><br>
  <div class="container">
    <div class="btn-group btn-group-justified btn-lg">
      <button type="button" class="btn btn-default disabled"><strong>SEARCH YOUR DESTINY LOCATION</strong></button>
    </div>
    
    <form action=""method ="GET">
        <div class="input-group mb-3">
            <input type="text" name="search"value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="search data">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    <hr>
    <!-- <div class="container">
    <h1>Add hostel</h1>
    <div class="btn-group btn-group-justified btn-lg ">
      <a href="addhostel.php"><button type="button" class="btn btn-primary">ADD HOSTEL</button></a>
    </div>
  </div> -->
  
  <br><br>
 
    <div class="footer">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: rgb(102, 218, 102);">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/about.php" class="text-white">About us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/hostels.php" class="text-white">Hostels</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Review</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/contact.php" class="text-white">Help</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/contact.php" class="text-white">Contact</a>
                            </h6>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                            Ostella is a dedicated platform designed to help students find safe, affordable, and comfortable hostels in unfamiliar cities. It makes settling into a new environment easier by offering trusted accommodations and connecting students with a supportive community                            </p>
                        </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">

                    <a href="#" class="fa fa-facebook"></a>

                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>

                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
</body>

</html>
