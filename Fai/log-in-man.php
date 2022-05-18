<?php 
	include('./../connect/Admin.php');
	$manager=new Manager();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$manager->login($_POST);
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Manager log in</title>
<link rel="stylesheet" href="vecle.css">
<script src="https://kit.fontawesome.com/4f5edb324c.js" crossorigin="anonymous"></script>

<script> function Manhome()
	   {
	     location.replace("../Manar/man2.html");
	   } </script>
</head>
<body>
<div class="banner">
	   <div class="navbar"> 
	    <img src="vecle.logoSmall.png"  class="logo" alt="logo">
		<ul>
		   <li><a href="index.php">Home</a></li>
		   
		   
		   
		 </ul>
		 
		</div>
		
		<form class="log-in-man" method="POST">
		<h2>Enter your information</h2>
		
		<input type="text" name="username"  maxlength="10" id="manID" class="input-box" placeholder="Manager Username ">
	
		<input type="password" name="password" maxlength="50" class="input-box" placeholder="Password ">
		
		<button type="submit" class="login-btn">Log in</button>
		<a href="sign_up.php" class="login-btn">Sign up</a>

		</form>
		<footer>
	    <div class="waves">
		
		  <div class="wave" id="wave1"></div>
		  <div class="wave" id="wave2"></div>
		  <div class="wave" id="wave3"></div>
		  <div class="wave" id="wave4"></div>
		</div>
	    <!--<ul class="social_icon"> 
		   <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
		   <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
		   <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
		   <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
		</ul>-->
		<ul class="menu">
		   <li><a href="index.php">Home</a></li>
		  
		</ul>
		<p>@2022 Vecle. || All rights Reserved</p>
	 </footer>
	 
	 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		</body>
</html>