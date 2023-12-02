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
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <h1 class="title"><b>MY <span class="moving-text">PORTFOLIO WEBPAGE</span></b><hr></h1>
      <div class="w3-section w3-bottombar w3-padding-16">
        <span class="w3-margin-right">Filter:</span> 
        <button class="w3-button w3-black"><i class="fa fa-diamond w3-margin-right"></i>Photoshops Designs</button>
        <a href="index3.php"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>PHP's</button></a>
      </div>
    </div>

    <!-- First Row-->
    <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
        <img src="Goku.jpg" alt="Goku" style="width:100%; height: 45vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>Goku</b></p>
        <p style="text-align: justify;">A Dragon Ball Saiyan, is known for his pure heart, martial arts skill, and unwavering quest for strength.</p>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <img src="Groupie.jpg" alt="Group" style="width:100%; height: 45vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>One Direction Group</b></p>
        <p style="text-align: justify;">A British-Irish boy band formed in 2010, known for their global popularity and hits, before going on an indefinite hiatus in 2016.</p>
      </div>
    </div>

    <div class="w3-third w3-container">
      <img src="loveteam.jpg" alt="LoveTeam" style="width:100%; height: 45vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>Love Team</b></p>
        <p style="text-align: justify;">Romantic pairing in entertainment, highlighting the chemistry between two individuals in movies or TV shows.</p>
      </div>
    </div>
    </div>

    <!-- Second Row-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="CallingCard.jpg " alt="CallingCard" style="width:100%; height: 33vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>Calling Card</b></p>
        <p style="text-align: justify;">A small card with contact information, used for professional or personal networking purposes.</p>
      </div>
    </div>

    <div class="w3-third w3-container w3-margin-bottom">
      <img src="CompanyLogo.jpg" alt="CompanyLogo" style="width:100%; height: 33vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>Company Logo</b></p>
        <p style="text-align: justify;">A "company logo" is a distinctive visual symbol or design representing a business or organization.</p>
      </div>
    </div>

    <div class="w3-third w3-container">
      <img src="Poster.jpg" alt="Poster" style="width:100%; height: 33vh;" class="w3-hover-opacity">
      <div class="w3-container w3-black">
        <p><b>Grand Opening Poster</b></p>
        <p style="text-align: justify;">A promotional display for announcing and celebrating new business or event openings.</p>
      </div>
    </div>
  </div>


<!-- Pagination -->
<div class="w3-center w3-padding-32">
  <div class="w3-bar">
    <a href="#" class="w3-bar-item w3-black w3-button">1</a>
    <a href="index2.html" class="w3-bar-item w3-button w3-hover-black">2</a>
  </div>
</div>


<!-- Images of Me -->
<div class="w3-row-padding w3-padding-16" id="about">
  <div class="w3-col m6 Mypic">
    <img src="Myself.jpg" alt="Me" style="width:100%; border: solid 5px black;">
  </div>
  <div class="w3-col m6">
    <img src="AnotherME.jpg" alt="Me" style="width:100%; border: solid 5px black;">
  </div>
</div>


<div class="w3-container w3-padding-large w3-black w3-margin-left w3-margin-right" style="margin-bottom:32px">
  <h4><b>About Me</b></h4>
  <hr class="About">
  <p class="sentence">Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of discovery, as I navigate the uncharted territories of my own potential. In this journey of self-exploration, I seek knowledge that transcends the boundaries of conventional wisdom, embracing the vastness of experience and the beauty of continuous learning. With a spirit unbound by fear, I am driven by the curiosity to unravel the mysteries that lie within and beyond, weaving the threads of passion into the fabric of my existence. Each step is a dance with the enigma of life, and every moment is an opportunity to sculpt the masterpiece of my own destiny.</p>
  <hr>  
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-black w3-margin-left w3-margin-right">
    <h4 id="contact"><b>Contact Me</b><hr></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>gersonbaclao1@gmail.com</p>
      </div>

      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Manila, Philippines</p>
      </div>

      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>09123456789</p>
      </div>
     </div>
    </div>

    <hr class="w3-opacity">

    <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-black">
    <div class="w3-row-padding">
      <div class="w3-third">
        <h3>Hello<hr></h3>
        <p>A new beginning, where opportunities are endless and challenges are just stepping stones to success.</p>
        <p>Thanks to <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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