<?php
    session_start();

    $db= mysqli_connect('localhost','root','','gamersdata');

    if (isset($_POST['submit'])) {
      $firstname= mysqli_real_escape_string($db, $_POST['firstname']);
      $lastname= mysqli_real_escape_string($db, $_POST['lastname']);
      $email= mysqli_real_escape_string($db, $_POST['email']);
      $job= mysqli_real_escape_string($db, $_POST['job']);
      $cv= mysqli_real_escape_string($db, $_POST['cv']);

      if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['job'] || empty($_POST['cv']))){
        echo "please fill the gaps";
      }
      else{
        $sql= "INSERT INTO job(firstname,lastname,email,job,cv)
        VALUES('$firstname','$lastname','$email','$job','$cv')";
        mysqli_query($db,$sql);
        header("location: home.html");
      }
    }

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Welcome to the Games World</title>
  <link rel="stylesheet" href="./css/join.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
  <!......navigation + image......>



    <div class="image">
      <div class="container">
        <div class="nav">
          <div class="icon"><a href="home.html"><img src="./image/gamesplay.png" height=30px></a>
          </div>
          <div class="section1">
            <a href="home.html">HOME</a>
            <a href="games.html">GAMES</a>
            <a href="news.html">NEWS</a>
          <div class="dropdown">
            <a href="career.html">CAREER</a>
            <div class="dropdown-content">
              <a href="join.html">JOIN US</a>
            </div>
          </div>
            <a href="about.html">ABOUT</a>
          </div>
          <div class="section2">
            <a href="login.php">LOG IN</a>
            <a href="signup.php">SIGN UP</a>
          </div>
        </div>
      </div>
    </div>

    <!....sign in....>
<div class="background">
            <h1>APPLY FOR JOB</h1>
            <form class="box" action="join.php" method="post">
              <label for="text">Enter Your First Name</label>
              <input type="text" name="firstname" placeholder="First Name">
              <label for="">Enter Your Last Name</label>
              <input type="text" name="lastname" placeholder="Last Name">
              <label for="">Enter Your Email</label>
              <input type="email" name="email" placeholder="Email">
              <label for="">Enter Job title</label>
              <input type="position" name="job" placeholder="Job title">
              <label for="">Upload Your CV</label>
              <input type="file" name="cv" placeholder="Upload CV">
              <input type="submit" name="submit" value=Apply>
            </form>
            </div>

            <!...footer......>
        <div class="footer">
            <div class="footerimage1">
              <img src="./image/gamesplay.png" height="40px">
            </div>
            <div class="footertxt1">
              <a href="#">Games</a>
              <a href="#">Career</a>
              <a href="#">About</a>
            </div>
            <div class="footertxt2">
              <a href="#">Terms of use</a>
              <a href="#">Privacy policy</a>
              <a href="#">Cookies policy</a>
            </div>
            <div class="copyright">
              <h1 id="copyright">GAMESPLAY copyright &copy 2019. All rights reserved.</h1>
            </div>
            <h1 id="footertxt3">JOIN THE CONVERSATION</h1>
            <div class="socialmedia">
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
              <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
            </div>
          </div>

        <!....javascript....>
        <script type="text/javascript" src="./js/all.js"></script>
        <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos) {
            document.getElementById("nav").style.top = "0";
          } else {
            document.getElementById("nav").style.top = "-80px";
          }
          prevScrollpos = currentScrollPos;
        }
        </script>

        <!--<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
          </script>-->

        </body>
        </html>
