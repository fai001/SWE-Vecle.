<!DOCTYPE html>
<html>
<head>
<title>HomePage</title>
<link rel="stylesheet" href="vecle.css">
<script src="https://kit.fontawesome.com/4f5edb324c.js" crossorigin="anonymous"></script>
<script> function login()
	   {
	     location.replace("log-in-man.php");
	   }
        function Browse()
	   {
	     location.replace("browseVecle.html");
	   }	   </script>
</head>
<body>

<div class="banner">
	   <div class="navbar"> 
	    <img src="vecle.logoSmall.png"  class="logo" alt="logo">
		<ul>
		   <li><a href="index.php">Home</a></li>
		   <li><a href="../Manar/TERPAGE.html">Termonologies</a></li>
		   
		   
		   
		 </ul>
		 
		</div>
		<!-- <div class="sreach-box">
		   <input class="search-text" type="text" name="" placeholder="Search here !">
		   <a class="search-btn" href="#">
		   
		   <i class="fa-solid fa-magnifying-glass"></i></a>
		   </div> -->
		
		 <div class="content">
		 
		 
		   <h1>What is Vecle.?</h1>
		   <br>
		   <h3>Are you looking for a car?<br>Want to know others experiences?<br>Or even want to compare between different car choices?</h3>
		   <br>
		   <h2>You ask the quistions , and Vecle. will answer!</h2>
		   <br>
		   
		   <h2>Vecle. is the best car review website!</h2>
		   <button onclick="login();"><span></span>Log in as manager!</button>
		   
		   
		   <button class="btnStart" onclick="Browse();"><span></span>Explore!</button>
		 </div>
		 </div>
		 <div class="content2">
		 
		  
		   </div>

           <footer>
	    <div class="waves">
		
		 
		<ul class="menu">
		   <li><a href="index.php">Home</a></li>
		   <li><a href="../Manar/TERPAGE.html">Termonologies</a></li>
		</ul>
		<p>@2022 Vecle. || All rights Reserved</p>
	 </footer>
	 
	 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	 
</body>
</html>