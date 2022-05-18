<?php 
      include('./../connect/Admin.php');
      $admin=new Manager();

      $mercedes=$admin->getCars("Mercedes");
      $toyotas=$admin->getCars('Tayota');

      $data=$admin->getUserById($_SESSION['id']);
     
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Maneger Home Page</title>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>rento</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- NO -->
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css"> <!-- NO -->
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS 
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
     <script >function update2()
	   {
	     location.replace("update.html");
	   } </script>
  <script src="Home.js"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
    
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
             <a href="man2.php"><img src="img/logo.jpeg" alt="logo"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="nv col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                       
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="man2.php"> Home  </a>
							
                              </li>
							
							  <li class="nav-item">
                                 <a class="nav-link" href="add.php"> Add Item  </a>
                              </li>
							<li class="nav-item">
                                 <a class="nav-link" href="TERPAGE.html"> Terminology Page  </a>
                              </li>
							  <li class="nav-item">
                                 <a class="nav-link" href="logout.php"> Logout  </a>
                              </li>
                           </ul>
                          <!-- <div class="sign_btn"><a href="#">Sign in</a></div> -->
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                  
                     
               <img style="width:100px;height:100px" src="./images/avatar.png" alt="Maneger"/>
			   <h1 id='namem'> <?php echo $data->name;?> </h1>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Tayota </h2>
                    
                  </div>
               </div>
            </div>

            <div class="row">
               <?php 
                  foreach($toyotas as $car){
                     $img=$admin->get_first_image($car->id);
               ?>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                    <a href="../gadah/productpage.php?id=<?php echo $car->id;?>"> <figure><img src="<?php echo $img->path;?>" alt="camry"/></figure></a>
                   
                    <a href="../gadah/productpage.php?id=<?php echo $car->id;?>"> <h3><?php echo $car->name;?></h3></a>
					  <a href="delete.php?id=<?php echo $car->id;?>"> Delete </a>
                 <a href="update.php?id=<?php echo $car->id;?>"> Update </a>                  </div>
               </div>
               <?php };?>
             
              
            </div>
         </div>
      </div>
      <!-- end car -->
     
	 
	 
	 <br><br>
	 <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     
                     <h2>Mercedes </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               
               <?php foreach($mercedes as $item){?>

                  <?php
                     
                     
                     $image=$admin->get_first_image($item->id);
                     ?>
               <div class="col-md-4 padding_leri">
                  <div class="car_box ">
                     <a href="../gadah/productpage.php?id=<?php echo $item->id;?>">
                     <figure>
                           <img style="height:200px" src="<?php echo $image->path;?>" alt="#"/>
                        </figure>
                        <h3><?php echo $item->name;?></h3>
						
                     </a>
					 <a href="delete.php?id=<?php echo $item->id;?>"> Delete </a>
                <a href="update.php?id=<?php echo $item->id;?>"> Update </a>                  </div>
               </div>
               <?php }?>
           
            </div>
         </div>
      </div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
    
          <footer>
         <div class="footer">
            <div class="container">
              
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

