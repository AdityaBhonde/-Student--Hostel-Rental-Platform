<!DOCTYPE html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
        
        html {
            box-sizing: border-box;
        }
        
        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .navigations {
            background-color: rgb(102, 218, 102);
        }
    </style>
    <style>
        .back {
            background-color: rgb(248, 237, 237);
            color: black;
        }
        
        .blacktext {
            color: "black";
            
        }
        .navigations {
            background-color: rgb(102, 218, 102);}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&amp;family=Merriweather&amp;family=Merriweather+Sans&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styleabout.css">
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
                        <a class="nav-link" aria-current="page" href="/project/hostels.php">Hostels</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/project/myhostels.php">My Profile</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/project/contact.php">Contact Us</a>
                    </li>
                                    </ul>
                <div class="d-flex">
                       <a class="navbar-brand" href="login.php">
                           <img src="https://img.icons8.com/color/48/000000/user.png" alt="" width="30" height="24" class="d-inline-block align-text-top">User Login

                       </a>
                       <a class="navbar-brand" href="admin_login.php">
                           <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-admin-network-technology-itim2101-lineal-color-itim2101-1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">Owner Login

                       </a>                                       </div>
            </div>
    </div></nav>
    <br><br><br>
    <!-- qoute -->
    <div class="container">
        <figure class="text-center back">
            <blockquote class="blockquote">
                <p>
                    We are First Year Undergraduate Students from Vishwakarma Institute of Technology, Pune.
                </p>
            </blockquote>
            <!-- <figcaption class="blockquote-footer">
                <strong>Someone famous in <cite title="Source Title">Source Title</cite></strong>
            </figcaption> -->
        </figure>
    </div>

    <!-- cards -->
    <div class="container">
        <h1>OUR TEAM</h1>
        <div class="row row-cols-1 row-cols-md-5 g-6">
            <div class="col">
                <div class="card h-100">
                    <img src="ayu.png" height="400px" class="card-img-top" alt="A">
                    <div class="card-body">
                        <h5 class="card-title">DIVYANKA DHAMALE</h5>
                        <p class="card-text">PRN: 12415264</p><br>
                        <p class="card-text">Computer Science and Engineering, VIT PUNE</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="kis.png" height="400px" class="card-img-top" alt="K">
                    <div class="card-body">
                        <h5 class="card-title">ABHIJIT BARAD</h5>
                        <p class="card-text">PRN: 12415260</p><br>
                        <p class="card-text">Computer Science and Engineering, VIT PUNE</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="san.png" height="400px" class="card-img-top" alt="S">
                    <div class="card-body">
                        <h5 class="card-title">ADITYA BHONDE</h5>
                        <p class="card-text">PRN: 12415262</p><br>
                        <p class="card-text">Computer Science and Engineering, VIT PUNE</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="san.png" height="400px" class="card-img-top" alt="S">
                    <div class="card-body">
                        <h5 class="card-title">KALPAJ BORKUTE</h5>
                        <p class="card-text">PRN: 2415262</p><br>
                        <p class="card-text">Computer Science and Engineering, VIT PUNE</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="san.png" height="400px" class="card-img-top" alt="S">
                    <div class="card-body">
                        <h5 class="card-title">TRUNAL PAWAR</h5>
                        <p class="card-text">PRN: 12415262</p><br>
                        <p class="card-text">Computer Science and Engineering, VIT PUNE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <!-- footer -->
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

                <hr class="my-5">

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



</body></html>