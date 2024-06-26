<!DOCTYPE html>
<html>
    <?php include "../controller/index_panel.php"; ?>
<head>
<title>sina</title>

<!--META TAGS-->
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!--FONTAWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet"> 


<!--EXTERNAL CSS-->
<link rel="stylesheet" href="./css/index.css">

</head>
<body>

<!--HEADER-->
<header>
<div class="banner">
<span class="section-left">
<a href="emailto:">BabakChalaki@gmail.com</a>
<a href="tel:">+(98)9059649619</a>
</span>
<span class="section-right">
<a href="#"title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#"title="Instagram"><i class="fa fa-instagram"></i></a>
<a href="#"title="Twitter"><i class="fa fa-twitter"></i></a>
</span>
</div>

<div class="logo parallelogram">
<span class="skew-fix">
    <img style=" margin-left:5px; " src="./img/roxxon_logo.webp" alt="LEVIOOSA">
</span>
</div>

<div class="topnav" id="myTopnav">
<a href="#" class="active">HOME</a>
<a href="#gallery">GALLERY</a>
<a href="#blog">BLOG</a>
<div class="dropdown">
<button class="dropbtn">SERVICES
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-content animate">
<a href="#">Web designing</a>
<a href="#">Web development</a>
<a href="#">Backend development</a>
</div>
</div> 
<a href="#contact">CONTACT</a>
<a href="#about">ABOUT</a>


<a href="#" title="SignIn" style="float:right;">
<?php
    if (isset($_SESSION["login_status"]) && $_SESSION["login_status"] == true) {
        echo $_SESSION["username"] . ' <i class="' . $_SESSION["icon"] . '"></i>';
        echo '<a href="../controller/logout.php">LOGOUT</a>';
        if (isset($_SESSION["doctor_user"]) && $_SESSION["doctor_user"] == true) {
            echo '<a href="doctor_panel.php">PANEL ADMIN </a>';
        }
    } else {
        echo '<a href="register.php">REGISTER </a>';
        echo '<a href="login.php">LOGIN </a>';
    }
?>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a> 
</div>
</header>





<!--CONTAINER-->
<div class="container">
<section>
<em>WELCOME TO sina hospital </em>
<h1>Take the world's best quality Treatment</h1>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
<a href="#" class="btn1">Learn More</a>
</section>
</div>




<!--SECTION1-->
<section class="section1">
<table>
<tr>
<td>
<div class="form">
<h4>REQUEST FOR YOUR</h4>
<h1>Consultation</h1>

<form method="post" action="../controller/reservation.php">
<input type="date" name="date" id="date" placeholder=""  />

<select id="select_time" name="time">
   <option value="emergencyservice">choose time </option>
   
   </select>
   
   <select name="doctor_name">
    <option value="emergencyservice">Doctors name</option>
    <?php foreach($doctors as $doctor): ?>
    <option value="<?= $doctor["id"] ?>:<?= $doctor["fullname"] ?>"><?= $doctor["fullname"] ?></option>
    <?php endforeach; ?>
</select>

   <select name="skill">
       <option value="emergencyservice">Emergency Service</option>
           <?php foreach($doctors as $doctor): ?>
       <option name="skill" value="<?= $doctor["bio"] ?>"><?= $doctor["bio"] ?></option>
   <?php endforeach; ?>
   </select>

<button type="submit" class="btn2">BOOK APPOINTMENT</button>
</form>

</div>
</td>
<td>
<em>ABOUT US</em>
<h1>Get better care for your health</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
</td>
</tr>
</table>
</section>






<!--SECTION2-->
<section class="section2">
<div class="cards">
<div class="card">
<i class="fa fa-medkit"></i>
<h1>Qualified Doctors</h1>
<p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
</div>
<div class="card">
<i class="fa fa-certificate"></i>
<h1>Certified Services</h1>
<p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
</div>
<div class="card">
<i class="fa fa-stethoscope"></i>
<h1>Advanced Equipment</h1>
<p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
</div>
<div class="card">
<i class="fa fa-heartbeat"></i>
<h1>Emergency Service</h1>
<p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
</div>
</div>
</section>







<!--SECTION3-->
<section class="section3">
<div class="cards">
<div class="card">
<section>
<h1>Laboratory Services</h1>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
</section>
</div>
<div class="card">
<section>
<h1>General Treatment</h1>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
</section>
</div>
<div class="card">
<section>
<h1>Orthopedician</h1>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
</section>
</div>
</div>
<div class="content">
<h1>We are well experienced doctors</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
</div>
</section>







<!--SECTION4-->
<section class="section4">
<div class="title_header">
<h1>Our Gallery Portfolio</h1>
</div>
<div class="row">
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
</div>
<div class="column">
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
</div>
</div>

<div id="myModal" class="modal">
<span class="close cursor" onclick="closeModal()">&times;</span>
<div class="modal-content">

<div class="mySlides">
<div class="numbertext">1 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">2 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">3 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">4 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">5 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">6 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<div class="mySlides">
<div class="numbertext">7 / 7</div>
<img src="https://i.ibb.co/Sft7gKp/bg2.webp" class="animate" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<div class="caption-container">
<p id="caption"></p>
</div>
</div>
</section>






<!--FOOTER-->
<img src="https://i.ibb.co/ZLHbWJz/footer.png" class="footer_image">
<footer>
<div class="column">
<a class="footer_title">COMPANY_NAME</a>
<a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
<a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
</div>
<div class="column">
<a class="footer_title">OTHER LINKS</a>
<a href="#">Privacy Policy</a>
<a href="#">Terms & Conditions</a>
<a href="#">Ticket</a>
<a href="#">Contact Us</a>
</div>
<div class="column">
<a class="footer_title">SHORT CUT</a>
<a href="">Our Services</a>
<a href="">Our Blog</a>
<a href="">Our Projects</a>
<a href="">About Us</a>
</div>
<div class="column">
<a class="footer_title">LATEST NEWS</a>
<a href="" title="Lorem ipsum dolor sit amet"><img src="https://source.unsplash.com/50x50/?green,trees"></a>
<a href="" title="Lorem ipsum dolor sit amet"><img src="https://source.unsplash.com/50x50/?green,tree"></a>
<a href="" title="Lorem ipsum dolor sit amet"><img src="https://source.unsplash.com/50x50/?green,plant"></a>
<a href="" title="Lorem ipsum dolor sit amet"><img src="https://source.unsplash.com/50x50/?green,forest"></a>
<a href="" title="Lorem ipsum dolor sit amet"><img src="https://source.unsplash.com/50x50/?green,afforestation"></a>
</div>
<div class="column">
<a class="footer_title">GET IN TOUCH</a>
<a title="Address"><i class="fa fa-map-marker"></i> 007, street, province/state, country - zipcode</a>
<a href="emailto:" title="Email"><i class="fa fa-envelope"></i> email@serviceprovider.domain</a>
<a href="tel:" title="Contact"><i class="fa fa-phone"></i> +(x)-xxxx-xxxxx</a>
</div>


<div class="sub-footer">
© CopyRights 2024 sina || All rights reserved
</div>
</footer>

<!--JAVASCRIPT-->
<script src="./js/Consultation.js"></script>
<script src="js/custom.js"></script>
<script src="./js/index.php"></script>
</body>
</html>