<?php 

include('./../connect/Admin.php');
	$manager=new Manager();
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cars=$manager->getCarByValue($_POST['value']);
	}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <title>Search</title>
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
      <link rel="stylesheet" href="./../gadah/css/bootstrap.min.css"> <!-- NO -->
      <!-- style css -->
      <link rel="stylesheet" href="./../gadah/css/style.css"> <!-- NO -->
      <!-- Responsive-->
      <link rel="stylesheet" href="./../gadah/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="./../gadah/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS 
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
     
  
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
             <a href="index.php"><img src="./../gadah/images/logo.jpg" alt="logo"/></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                       
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="../Fai/browseVecle.html"> Browse  </a>
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
     
      </div>
      <!-- end banner -->
      <!-- car -->
      <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Search Result</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php foreach($cars as $car){?>
                 <?php  $img=$manager->get_first_image($car->id) ?>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                    <a href="./../gadah/productpage.php?id=<?php echo $car->id;?>"> <figure><img src="./../Manar/<?php echo $img->path ;?>" alt="camry"/></figure></a>
                     
                      <a  href="./../gadah/productpage.php?id=<?php echo $car->id;?>"> <h3><?php echo $car->name;?></h3></a>
                  </div>
               </div>
               <?php }?>
            </div>
			<div class="row" style="height:50px">

			</div>
         </div>
      </div>
      <!-- end car -->
</body>
</html>