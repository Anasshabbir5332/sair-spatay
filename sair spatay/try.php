<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assent/Css/style.css">
    <link rel="stylesheet" type="text/css" href="try.css">
    <title> Sair Spatay </title>
    <style>
        * {
            margin: 0;
            padding: 0;
            /* box-sizing: border-box; */
            font-family: 'Montserrat', sans-serif;
        }

        /* ---------------------------------navbar---------------- */
        .fa-bars {
            color: #0066ff;
            font-size: 25px;
        }

        #ctext {
            color: hotpink;
            font-size: 25px;
            text-shadow: 1px 1px 2px #000000;
        }

        #dtext {
            color: #0066ff;
            font-size: 35px;
            text-shadow: 2px 2px 4px #000000;
            margin-right: 5px;
        }

        nav {
            background-color: #38095ff7 !important;
        }

        nav ul li {
            font-weight: bold;
        }

        nav ul li a:hover {
            color: darkblue;
            margin-left: 5px;
        }

        /* --------------------------video----------------- */
        .videoo {
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .videeo {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -100;
        }


        #myVideo {
            width: 100%;
            height: auto;
        }

        /* --------------------------cards----------------- */
        .sec-page {
            text-align: center;
        }

        .sec-page h1 {
            color: #0066ff;
            text-shadow: 2px 2px 4px #000000;
            padding: 20px 0;
        }

        .first {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .first .card {
            width: 50%;
            height: 400px;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 20%);
        }

        .first .card:hover {
            margin-top: 3px;
            transition: 1s;
        }

        /* --------------------------image----------------- */
        .baloon {
            width: 100%;
            height: 600px;
            overflow: hidden;
            margin-top: 30px;
        }

        .baloon img {
            width: 100%;
            height: auto;
        }

        .baloon h1 {
            margin: 250px 0;
            text-align: center;
            font-size: 40pt;
            color: white;
            font-weight: bold;
            text-shadow: 3px 3px 5px blue;
        }

        /* --------------------------about-us----------------- */
        .about-us h1 {
            color: #0066ff;
            text-shadow: 2px 2px 4px #000000;
            text-align: center;
            padding: 10px;

        }

        /* --------------------------Happy-clients----------------- */
        .happy-clients-heading {
            color: #0066ff;
            text-shadow: 2px 2px 4px #000000;
            padding: 10px;
            text-align: center;
        }

        .happy-clients img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 0 10px 16px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 20%);
        }

        .happy-clients img:hover {
            margin-left: 10px;
            transition: 2s;
        }

        .happy-clients p {
            margin-top: 30px;
        }

        .card-title {
            color: #0066ff;
            text-shadow: 1px 1px 2px #000000;
        }

        /* ----------------Plan-my-trip--------------------------- */
        .plan-trip {
            background: transparent;
            margin: 2% auto;
            padding: 5px;
            border-radius: 20px;
            background: rgb(225,226,225);
            background: radial-gradient(circle, rgba(225,226,225,1) 0%, rgba(249,244,244,1) 52%, rgba(110,217,223,1) 100%);
        }

        .plan-trip h1 {
            color: white;
            text-shadow: 2px 2px 4px #000000;
            padding: 15px 10px;
        }

        h4 {
            color: white;
            text-shadow: 2px 2px 2px #000000;
            padding: 5px 10px;

        }

        /* ----------------Contanct--------------------------- */
        .contact-trip {
            background: transparent;
            margin: 2% auto;
            padding: 5px;
            border-radius: 20px;
            background: rgb(225,226,225);
            background: radial-gradient(circle, rgba(225,226,225,1) 0%, rgba(249,244,244,1) 52%, rgba(110,217,223,1) 100%);
        }

        .contact-trip h2 {
            color: white;
            text-shadow: 2px 2px 4px #000000;
            padding: 5px 10px;
        }

        .col input {
            padding: 5px;
            margin-top: 5px;
            border: 2px solid gray;
            border-radius: 5px;
        }

        #name {
            appearance: none;
            border: none;
            background-color: transparent;
            border-radius: 0;
            border-bottom: solid 1px #242323;
            color: inherit;
            display: block;
            outline: 0;
            padding: 2%;
            text-decoration: none;
            width: 60%;
        }

        /* ----------------Footer--------------------------- */
        .footer {
            display: flex;
            width: 100%;
            background: rgb(225,226,225);
            background: radial-gradient(circle, rgba(225,226,225,1) 0%, rgba(249,244,244,1) 52%, rgba(110,217,223,1) 100%);
            padding: 80px;
        }

        .footer a {
            margin: 20px auto;
            text-align: center;
            text-decoration: none;
            padding: 8px 5px;
            box-shadow: 0 0 10px 10px;
            border-radius: 10px;

        }

        .footer a:hover {
            text-shadow: 1px 1px 2px #000000;
            transition: 1s;
        }

        .yt:hover {
            color: red;
        }

        .in:hover {
            color: orangered;
        }

        .link:hover {
            color: lightyellow;
        }

        .copyright {
            background: rgb(225,226,225);
            background: radial-gradient(circle, rgba(225,226,225,1) 0%, rgba(249,244,244,1) 52%, rgba(110,217,223,1) 100%);
            padding: 10px 0;
            text-align: center;
        }

        .copyright h5 {
            text-shadow: 1px 1px 4px #000000;
            color: black;
        }

        .Feedback {
            text-align: center;
        }

        .feedbtn {
            width: 200px;
        }

        /* --------------------End----------------------- */
        /* ---------------------media query------------- */
        @media screen and (max-width: 768px) {
            .sec-page {
                margin-top: -70px;
            }

            .back {
                height: 400px;
            }

            .ffirst span {
                padding: 1% 7%;
            }

            .videeo {
                display: none;
            }

            .fb a {
                padding-left: 80px;
            }
        }

        @media screen and (max-width: 425px) {
            .sec-page {
                margin-top: -250px;
            }

            .back {
                height: 100px;
            }

            .ffirst span {
                padding: 1% 3%;
            }

            .fb a {
                padding-left: 20px;
            }
        }
        }
        }
    </style>
</head>

<body>
    <!----------------nvabar---------------->
    <nav class="navbar  navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <strong> <span id="dtext">Sair</span> <span
                        id="ctext">Spatay</span></strong> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plantrip">Plan my trip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#abou">About US</a>
                    </li>
                    <li>
                        <a class="nav-link" href="#con">Contact us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu bg-transparent text-light" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Login</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdropp">Signup</a></li>
                            <li>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 bg-transparent text-light" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- ------------------------video----------------------------- -->
    <div class="videoo">
        <video autoplay muted loop id="myVideo">
            <source src="Balloon.mp4" type="video/mp4">
        </video>
    </div>

    <!-- ------------------------cards----------------------------- -->
    <div class="sec-page">
        <br>

<?php
$con=mysqli_connect('localhost','root','','sair spatay');

$datashowquery="SELECT * FROM `new place to visit` ";
$data=mysqli_query($con,$datashowquery);
$count=mysqli_num_rows($data);
?>

<?php
while ($show=mysqli_fetch_assoc($data)) {

?>

<h1><?php echo $show['heading'] ?></h1>
<?php echo $show['paragraph'] ?>

<?php
}
?>


    </div>
    <div class="main">
        <div class="first">
            <div class="card" style="width: 18rem; height:31rem">
                <img src="assent/img/one.jpg" class="card-img-top" alt="...">
                <div class="card-body">

                <?php
$con=mysqli_connect('localhost','root','','sair spatay');

$datashowquery="SELECT * FROM `car_one` ";
$data=mysqli_query($con,$datashowquery);
$count=mysqli_num_rows($data);
?>

<?php
while ($show=mysqli_fetch_assoc($data)) {

?>

<h5 class="card-title"><?php echo $show['title'] ?>
</h5>
<p><?php echo $show['price'] ?> </p>
<p class="card-text"> <?php echo $show['description'] ?> 
</p>




<?php
}
?>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; height:31rem">
                <img src="assent/img/two.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <?php
$con=mysqli_connect('localhost','root','','sair spatay');

$datashowquery="SELECT * FROM `card_two` ";
$data=mysqli_query($con,$datashowquery);
$count=mysqli_num_rows($data);
?>
<?php
while ($show=mysqli_fetch_assoc($data)) {
?>
<h5 class="card-title"><?php echo $show['title'] ?>
</h5>
<p><?php echo $show['price'] ?> </p>
<p class="card-text"> <?php echo $show['description'] ?> 
</p>
<?php
}
?>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem; height:31rem">
                <img src="assent/img/turkey.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <?php
$con=mysqli_connect('localhost','root','','sair spatay');

$datashowquery="SELECT * FROM `card_three` ";
$data=mysqli_query($con,$datashowquery);
$count=mysqli_num_rows($data);
?>
<?php
while ($show=mysqli_fetch_assoc($data)) {
?>
<h5 class="card-title"><?php echo $show['title'] ?>
</h5>
<p><?php echo $show['price'] ?> </p>
<p class="card-text"> <?php echo $show['description'] ?> 
</p>
<?php
}
?>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- ------------------------image----------------------------- -->

    <div class="card baloon">
        <img class="card-img" src="assent/img/baloon.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h1 class="card-title">Hot Air Balloon Rides</h1>
        </div>
    </div>
        <!------------------------Plan-my-trip----------------------------- -->

        <div id="plantrip" class="container plan-trip">
        <div class="row">
            <div class="col">
                <br>
                <h1>
                    Plan my trip!
                </h1>

                <h4>Contact Details</h4>
                <form action="plan.php" method="post">
                    <input name="fname" type="username" placeholder="First Name*">
                    <input name="lname" type="username" placeholder="Last Name*"><br>
                    <input name="adress" type="username" placeholder="Email Adress*">
                    <input name="cnumber" type="username" placeholder="Contact Number*"><br>
                    <input name="location" type="username" placeholder="Enter Location*"><br>
                    <br>
                    <h4>Number of Travelers</h4>
                    <input name="person" type="username" placeholder=" Person ">
                    <input name="children" type="username" placeholder=" Children "> <br>
                    <input name="room" type="username" placeholder=" Room ">
                    <br>
                    <br>
                    <h4>When would you like to go?</h4>
                    <input name="dcity	" type="username" placeholder=" Departure City ">
                    <input name="date" type="username" placeholder=" Date">
                    <br>
                    <br>
                    <h4>Tour Duration</h4>
                    <input name="day" type="username" placeholder=" Day">
                    <br> <br>
                    <input class="btn btn-primary border my-3" type="submit" name="submitt">

                    <br>
                    <br>
                </form>
            </div>
        </div>
    </div>



    <!-- ------------------------about-us----------------------------- -->

    <div id="abou" class="container">
        <div class="row py-4">
            <div class="col-12 about-us">
                <h1> About us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quo.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md box-shadow"> <img class="img-fluid" src="/assent/img/bag.jpg" alt="" srcset=""></div>
        </div>
    </div>
    <!------------------------ Send us feedback----------------------------- -->
    <br>
    <div class="container">

        <div class="row">
            <div class="col Feedback">
                <h3>Give Us Feedback</h3>
                <p> Your feedback make us happy</p>
            </div><br>
            <div class="col">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Give us Feedback
                  </button>
            </div>
            <br>

        </div>
    </div>
<!-- Modal -->
<form  action="feedback.php" method="post" enctype="multipart/form-data">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give us Feedback</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="">
            <h5>Name:</h5>
        </label>
        <input type="Name" name="name"  id="namee" placeholder="Name"><br>
        <label for="">
            <h5>Note  :</h5>
        </label>
        <input type="Feedback" name="note" id="namee" placeholder="Feedback"><br>
      </div>
      <div class="mb-3 w-50 ml-3">
        <label for="formFile" class="form-label"> <h5>Add image</h5></label>
        <input class="form-control" name="img" type="file" id="formFile">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input class="btn btn-primary border my-3" type="Submit" name="submit">

      </div>
    </div>
  </div>
</div>
</form>

    <!------------------------Happy-clients----------------------------- -->

    <div class="happy-clients-heading">
        <h1>Happy Clients</h1>
    </div>
    <div class="container py-5 happy-clients">

        <div class="row py-4">
            <div class="col-md-2">
                <img class="img-thumbnail" src="assent/img/1.jpg">
            </div>
            <div class="col-md-8">
                <h5> Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        ---------------------------------------
        <div class="row py-4">
            <div class="col-md-8">
            <h5> Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-md-4">
                <img class="img-thumbnail" src="assent/img/2.jpg">
            </div>
        </div>
        ---------------------------------------
        <div class="row py-4">
            <div class="col-md-2">
                <img class="img-thumbnail" src="assent/img/3.png">
            </div>
            <div class="col-md-8">
            <h5> Lorem ipsum dolor sit amet.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

    </div>
    <!------------------------Contanct----------------------------- -->
    <form action="contact.php" method="post">
        <div id="con" class="container contact-trip">
            <div class="col">
                <br>
                <h2>Contact Us</h2>
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="name" placeholder="Email">
                <input type="text" name="subject" id="name" placeholder="Subject">
                <input type="textarea" name="notes" id="name" placeholder="Notes">
                <input class="btn btn-primary border my-3" type="Submit" name="submit">
            </div>
        </div>
    </form>
    <!------------------------Footer----------------------------- -->

    <div class="footer">
        <a href="">
            <h5>Facebook</h5>
        </a>
        <a class="yt" href="">
            <h5>Youtube</h5>
        </a>
        <a class="in" href="">
            <h5>Instagram</h5>
        </a>
        <a class="link" href="">
            <h5>Linkin</h5>
        </a>
    </div>
    <div class="copyright">
        <h5>COPYRIGHT © 2020 CODIFY | DESIGNR BY: ANAS SHABBIR</h5>
    </div>

    <!----------------------------End------------------------- -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">
                        <h5>Email:</h5>
                    </label> <br>
                    <input type="email" name="email" id="email" placeholder="Email"> <br>
                    <label for="">
                        <h5>Password:</h5>
                    </label> <br>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== two---------------- -->
    <div class="modal fade" id="staticBackdropp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">
                        <h5>Name:</h5>
                    </label><br>
                    <input type="Name" id="namee" placeholder="Name"><br>

                    <h5>Email:</h5>
                    </label>
                    <input type="email" name="email" id="email" placeholder="Email"> <br>
                    <label for="">
                        <h5>Password:</h5>
                    </label> <br>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Signup</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./index.js"></script>
    <!---------------------java-script-------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>