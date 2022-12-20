<?php 
include 'mail.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BBQKing</title>
   <link rel="icon" href="icon.png">
    <!-- font icons -->
    <link rel="stylesheet" href="themify-icons.css">

    <link rel="stylesheet" href="animate.css">
    <!-- menu-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style.css">
  
    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="foodhut.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="logo.png" class="brand-img" alt="">
                <span class="brand-txt">BBQKing</span>
            </a>
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header" style="background: url(5.jpg); background-repeat: no-repeat; height: 50vh;
    max-height: 500px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    min-height: 650px;">
                <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">BBQ King</h1>
            <h2 class="display-4 mb-5">You host We roast</h2>
            <a class="btn btn-lg btn-primary" href="#menu">View Our Menu</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div style="background-image: url(icon.png); width: 350px;" class="col-lg-6 has-img-bg" ></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">About Us</h2>
                        <h1>Our Mission </h1> 
                        <p>The Braai King is a mobile catering company specialising in spit braai,<br> barbeque and grill food.<br>
                            We cater for all occasions from weddings, birthdays, private parties,<br> corporate events etc.<br>
                            Our food is prepared fresh onsite, using high quality meat, <br>veggies and the freshest ingredients to ensure the best results at all times.</p><br>
                        <h1>Our vision</h1>
                        <p>The Braai King offers value for money quality catering to suit any budget.<br>
                            We pay attention to detail, preparation, presentation and
                            create<br> an atmosphere that will make your event/occasion special and memorable.
                            <br><br>
                            “You Host we Roast”
                            </p>  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- menu section-->
    <div id="menu" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Build Your Own Spit Braai Menu - Freshly Prepared Onsite & Served Buffet Style.<br>
            Minimum number of people = 35 people </p>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Full lamb on spit</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R149 p/p</span>
            </span>
            <span class="menu-subtitle">500g meat per person</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Roast chicken </a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R25 p/p</span>
            </span>
            <span class="menu-subtitle">Drumstick/ Thigh piece per person</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Roast chicken</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R35 p/p</span>
            </span>
            <span class="menu-subtitle">1/4 chicken leg per person</span>
          </div>

          <div class="menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Roast beef steak</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R45 p/p</span>
            </span>
            <span class="menu-subtitle">120g steak per person</span>
          </div>

          <div class=" menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Roast boerewors</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R30 p/p</span>
            </span>
            <span class="menu-subtitle">120g sausage/boerewors per person</span>
          </div>

          <div class="menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Roast baby potatoes</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R8 p/p</span>
            </span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Pap & Gravy</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R15 p/p</span>
            </span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Rice &Gravy</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R15 p/p</span>
            </span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix"> 
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Garlic bread</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R10 p/p</span>
            </span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Cheesy garlic bread</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R15 p/p</span>
            </span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Plain bread rolls</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"> R6 p/p</span>
            </span>
          </div>

         <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Grilled mixed veggies</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">R25 p/p</span>
            </span>
          </div>
        </div>

        <div class="dinner menu-restaurant">
          <span class="clearfix">
            <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Creamy spinach </a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">R25 p/p</span>
          </span>
        </div>

        <div class="dinner menu-restaurant">
          <span class="clearfix">
            <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Pumpkin fritters</a>
            <span style="left: 166px; right: 44px;" class="menu-line"></span>
            <span class="menu-price">R25 p/p</span>
          </span>
        </div>
      </div>


      <div class="dinner menu-restaurant">
        <span class="clearfix">
          <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Chakalaka</a>
          <span style="left: 166px; right: 44px;" class="menu-line"></span>
          <span class="menu-price">R20 p/p</span>
        </span>
      </div>

     <div class="dinner menu-restaurant">
        <span class="clearfix">
          <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Greek salad</a>
          <span style="left: 166px; right: 44px;" class="menu-line"></span>
          <span class="menu-price">R25 p/p</span>
        </span>
      </div>
    </div>

    <div class="dinner menu-restaurant">
      <span class="clearfix">
        <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Creamy coleslaw</a>
        <span style="left: 166px; right: 44px;" class="menu-line"></span>
        <span class="menu-price">R20 p/p</span>
      </span>
    </div>

    <div class="dinner menu-restaurant">
      <span class="clearfix">
        <a class="menu-title" data-meal-img="assets/img/restaurant/rib.jpg">Creamy potato salad</a>
        <span style="left: 166px; right: 44px;" class="menu-line"></span>
        <span class="menu-price">R20 p/p</span>
      </span>
    </div>
  </div>

  <div class="dinner menu-restaurant">
    <span class="clearfix">
      <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Malva pudding</a>
      <span style="left: 166px; right: 44px;" class="menu-line"></span>
      <span class="menu-price">R25 p/p</span>
    </span>
    <span class="menu-subtitle"> Malva pudding served with custard</span>
  </div>

  <div class="dinner menu-restaurant">
    <span class="clearfix">
      <a class="menu-title"  data-meal-img="assets/img/restaurant/rib.jpg">Peppermint crisp tart</a>
      <span style="left: 166px; right: 44px;" class="menu-line"></span>
      <span class="menu-price">R25 p/p</span>
    </span>
  </div>
</div>
<a href="Menu.pdf" class="btn btn-lg btn-primary" id="rounded-btn">Click to download our menu</a>





      </div>
    </div>
 

    </div>
    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">Some of our work</h2>
    </div>
    <div class="gallary row">
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="2.jpg" class="gallary-img">
        
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="3.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="9.jpg" class="gallary-img">
           
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="5.jpg" class="gallary-img">
            
        </div>
        
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="6.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="7.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="8.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="4.jpg" class="gallary-img">
           
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="10.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="1.jpg" class="gallary-img">
            
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="../q/IMG_20221208_192015.jpg" class="gallary-img">
           
        </div>
    </div>

    <!-- book a table Section  -->
    <div style="background-image: url(aboutback.jpg);"  class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <form action="" method="post" enctype="multipart/form-data" name="book">
            <h2 class="section-title mb-5">BOOK US</h2>
            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="email" name="email" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" name="people" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="NUMBER OF GUESTS" max="1000" min="30">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" name="time" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="EMAIL">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" name="date" id="booktable" class="form-control form-control-lg custom-form-control" placeholder="12/12/12">
                </div>
            </div>
            <div>
              <p class="success"><?php
               echo $success;
               ?></p>
               <p class="success"><?php
               echo $failed;
               ?></p>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary" id="rounded-btn">Click to Book</button>

        </div>
      </form>
    </div>
  

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 50%; height: 100%; min-height: 400px">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.222197835802!2d28.269727815020307!3d-25.730164583651103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95603cf25b11ed%3A0x71f1f4d638962111!2s168%20Hartley%20St%2C%20Weavind%20Park%2C%20Pretoria%2C%200184!5e0!3m2!1sen!2sza!4v1671566905000!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>Contact Us</h3>
                <p>You can get in contact with us for any enquires </p>
                <div class="text-muted">
                    <p><span class="fa fa-map-marker"></span><a href>168 Hartley st <br> Weavind Park<br>Pretoria <br>0184 </a></p>
                    <p><span class="fa fa-phone"></span><a href="tel:+27826344810">(082) 634 4810</a> </p>
                    <p><span class="fa fa-envelope o"></span><a href="mailto:info@thebraaiking.co.za">info@braaiking.co.za </a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
  
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Proudly made by MbaliDev</p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="jquery-3.4.1.js"></script>
    <script src="bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="wow.js"></script>
    
    <!-- FoodHut js -->
    <script src="foodhut.js"></script>

</body>
</html>
