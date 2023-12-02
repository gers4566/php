<!DOCTYPE html>
<html>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="bubbles.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.sentence {text-align: justify;}
.contact hr{width: 9%; margin-top: -8px;}
.title {letter-spacing: 25px; opacity: 0; transform: translateY(-20px); transition: opacity 1s, transform 1s;}
.title.show {opacity: 1; transform: translateY(0);} 
.moving-text {display: inline-block; animation: moveText 3s infinite;}
@keyframes moveText {0%, 100% { transform: translateX(-20px); } 50% { transform: translateX(50px); }}
</style>


<body class="w3-dark-grey w3-content" style="max-width:1600px">
  

  <!--Sidebar-->

  <nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
      </a>
      <img src="My Profile.jpg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>PORTFOLIO</b></h4>
      <hr>
      <p class="w3-text-grey">Elective 2 Finals</p>
    </div>
    <div class="w3-bar-block">
      <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>  
      <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a> 
    </div>
    <div class="w3-panel w3-large">
      <a href="https://www.facebook.com/johngersbaclao"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/@TekkenLaws"><i class="fa fa-youtube-play w3-hover-opacity"></i></a>
      <a href="https://tekkenmods.com/user/39731/TekkenLaws"><i class="w3-hover-opacity"><img src="logo.png" style="width: 8%; height: 8%;" ></i></a>
    </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="My Profile.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <h1 class="title"><b>MY <span class="moving-text">PORTFOLIO WEBPAGE</span></b><hr></h1>
      <div class="w3-section w3-bottombar w3-padding-16">
        <span class="w3-margin-right">Filter:</span> 
        <a href="index.html"><button class="w3-button w3-black"><i class="fa fa-diamond w3-margin-right"></i>Photoshops Designs</button></a>
        <button class="w3-button w3-white w3-hide-small"><i class="fa fa-key w3-margin-right"></i>PHP's</button>
      </div>
    </div>

   


  <script>
// open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function startAnimation() {
      var title = document.querySelector('.title');
      title.classList.add('show');
    }

 
    document.addEventListener('DOMContentLoaded', function () {
   
      setTimeout(startAnimation, 100);
    });
</script>

</body>
</html>