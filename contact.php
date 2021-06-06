<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "mosabbirbhuiyanonady@gmail.com";
  $header = "From:" .$email;
  $txt = "You have received an email from ".$name. ".\n\n".$message;
  mail($to, $subject, $txt, $header);

  header('Location: contact.php?mailsend');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="./image/icon.png">
  </head>

  <body>

    <!......navigation + image......>

    <div class="image">
        <div class="container">
          <div id="nav">
            <div class="icon"><a href="home.html"><img src="./image/gamesplay.png" height=30px></a>
            </div>
            <div class="section1">
              <a href="home.html">HOME</a>
              <a href="games.html">GAMES</a>
              <a href="news.html">NEWS</a>
            <div class="dropdown">
              <a href="career.html">CAREER</a>
              <div class="dropdown-content">
                <a href="join.php">JOIN US</a>
              </div>
            </div>
              <a href="about.html">ABOUT</a>
            </div>
            <div class="section2">
              <a href="login.php">LOG IN</a>
              <a href="register.php">SIGN UP</a>
            </div>
          </div>
    <div class="contactform">
    <form class="contact" action="contact.php" method="post">
  <div class="box">
    <h1>Name</h1>  <input type="text" name="name">
    <h1>Email</h1> <input type="text" name="email">
    <h1>Subject</h1> <input type="text" name="subject">
    <h1>Message</h1> <input type="text1" name="message">
    <h1><button class="submit" type="submit" name="submit">Send Mail</button></h1>
    </form>
  </div>
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
  </body>
</html>
