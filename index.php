<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html public "-//W3C//DTD html 5.0 //en">
<html>
<head>
<title>KNC-BANK-OF KENYA</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" media="screen" title="style (screen)" />
</head>
<body>
<div class="wrap">
  <h1>KNC-BANK-OF-KENYA<br />
    <span>Moving with you...</span></h1>
    
<!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;"></a> </p>
      <p> <a href="index.html" style="color: green"></a> </p>
    <?php endif ?>
 <div id="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="service.html">services</a></li>
      <li><a href="news.html">our news</a></li>
      <li><a href="treading.html">treading events</a></li>
      <li><a href="index.php?logout='1'" >log out</a></li>
    </ul>
    <div class="clearer">&nbsp;</div>
  </div>
  <div id="right">
    <h2>KNC- BANK</h2>
    <b><i><strong> 
      <img class="front" src="images/bg-01.jpg" 
style="width: 180px;
height="600px;>
 </strong></i></b>
    <h2>QUESTION. </h2>
    
      <p> How do you save?</p>
     <ol><li> <p>Daily</p></li>
      <li><p>Weekly</p></li>
      <li><p>Monthly</p></li>
      <li><p>Yearly</p></li>
    </ol>
  </div>
  <div id="main">
    <h2>Welcome!</h2>
    <img class="front" src="images/glass.jpg" alt="" />
    <div class="middle">
      <div class="rightbox">
        <p>KNC-BANK has a wide reputation of its convinience, by default this Bank is of the people.It is irresistable, come bank with us and have your testimoney. </p>
      </div>
    </div>
    <p class="big">Welcome to <strong>KNC-BANK-OF-KENYA</strong>, The bank that knows your financial needs. Enjoy Banking with us.</br>Get in touch~</p><ol>
    <li><a>Email.kncbank@gmail.com</a></li>
<li><a>Mobile: 0798761870</a></li>
</ol>
    <p>KNC-BANK-OF-KENYA </a> is a Bank like no other.</a> <a>The only transparent Bank .</a>
    
    <div class="clearer">&nbsp;</div>
  </div>
</div>
<div id="extraDiv2">
  <div class="wrap">
    <div id="foot"><p>Below we share part of our history:</br>
    </p>
      <p><b><strong>KNC-BANK. </strong></b></br>
      It begun in the year 2016, its a Kenyan upcomming Bank. Its proudly made by kenyans</br>
      the co-founders are <b>Charles  Ndung'u</b> who is also the ceo.  </p>
     
	</body>
</html>