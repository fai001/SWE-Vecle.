<?php 
   include(__DIR__."/../connect/Admin.php");
   $admin=new Manager();
   if(isset($_GET['company'])){
      $cars=$admin->getCars($_GET['company']);
     

   }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <title>CompenyPage</title>
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
                              <a href="index.php"><img style="height: 105px;width:100px;" src="images/logo.jpeg" alt="#" /></a>
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
                                 <a class="nav-link " href="../Fai/index.php"> Home  </a>
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
                     <h1>MERCEDES</h1>
                     
                     <p> 
                        Ride every route in comfort and style.
                        <br>
                        <br>

                        A timeless, simple design language, perfectly smooth architecture, yet reduced down to the essentials. Yes, we mean the MERCEDES'S cars!
                        <br>
                        <br>

                        <head>Express your individuality with  Mercedes</head>
                     </p>
                    
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
                     <h2>VARIETY OF CARS </h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php foreach($cars as $car){?>
                  <?php 
                     $item=$admin->get_first_image($car->id);   
                     
                  ?>
               <div class="col-md-4 padding_leri">
                  <div class="car_box ">
                     <a href="./../gadah/productpage.php?id=<?php echo $car->id;?>">
                     <figure>
                           <img style="height:200px" src="./../Manar/<?php echo $item->path; ?>" alt="#"/>
                        </figure>
                        <h3><?php echo $car->name;?></h3>
                     </a>
                  </div>
               </div>
               <?php }?>
             
            </div>
         </div>
      </div>
      <!-- end car -->
     
    
         
  
      <!-- choose  section -->
	   <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>talk about car compeny</h2>
                     <span> </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>A German global automotive brand, a subsidiary of Daimler.


</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>Mercedes-Benz is known for its luxury vehicles, vans, trucks, buses and ambulances.


</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>It is headquartered in Stuttgart in the state of Baden-W??rttemberg. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
      <!-- end choose  section -->
      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
              
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>?? 2022 All Rights Reserved.</p>
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

