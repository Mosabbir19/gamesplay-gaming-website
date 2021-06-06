<?php
session_start();
$db= mysqli_connect('localhost','root','','gamersdata');

if (isset($_POST['submit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    //header("location: login.php?empty= please fill the gaps");
    echo "please fill the gaps";
  }else {
    $query="SELECT * FROM gamers1 WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
    $result=mysqli_query($db,$query);

    if (mysqli_fetch_assoc($result)) {

      $_SESSION['username']=$_POST['username'];
      echo "successfully logged in";

    }else {
      echo "invalid";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome to the Games World</title>
  <link rel="stylesheet" href="./css/login.css">
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
                <a href="join.php">JOIN US</a>
              </div>
            </div>
            <a href="about.html">ABOUT</a>
          </div>
          <div class="section2">
            <a href="login.php">LOG IN</a>
            <a href="signup.php">SIGN UP</a>
          </div>
        </div>
<!....log in....>

        <form class="box" action="login.php" method="post">
          <h1>Log In</h1>
          <input type="text" name="username" placeholder="username">
          <input type="password" name="password" placeholder="password">
          <input type="submit" name="submit" value="login">
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
