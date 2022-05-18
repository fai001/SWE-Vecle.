<?php 
   include(__DIR__."/../connect/Admin.php");
   $admin=new Manager();
   if(isset($_GET['id'])){
      $car=$admin->get_car_by_id($_GET['id']);
      $images=$admin->get_all_car_images($car->id);
      $reviews=$admin->get_all_reviews($_GET['id']);
   }
   if($_SERVER['REQUEST_METHOD']=='POST'){
      $_POST['car_id']=$_GET['id'];
      $bool=$admin->insert_rview($_POST);
      if($bool){
         $page = $_SERVER['PHP_SELF']."?id=".$car->id;
         $sec = "5";
         header("Refresh: $sec; url=$page");
      }
   }
  


?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Car information</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css2/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css2/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css2/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css2/style.css">
      <link rel="stylesheet" href="css2/bootstrap-select.min.css">
      <link rel="stylesheet" href="css2/slick.min.css">
      <link rel="stylesheet" href="css2/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css2/responsive.css">
      <link rel="stylesheet" href="css2/reviwe.css">
	  <script >function com()
	   {
	     location.replace("../Manar/comperpage.php");
	   } </script>
   </head>
  
   <body class="main-layout">
    
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="../Fai/index.php"><img style="height: 100px;width:100px;" src="images/logo.jpg" alt="logo" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        
                       
                           <ul style="float: right;" class="navbar-nav mr-auto">
                              <li class="nav-item" >
                                 <?php if($car->company=="Tayota"){?>
                                 <a class="nav-link " href="CompenyPage.php?company=<?php echo $car->company;?>"> <?php echo $car->company;?> page  </a>
                                 <?php }else{?>
                                    <a class="nav-link " href="./../amira/compenyPage.php?company=<?php echo $car->company;?>"> <?php echo $car->company;?> page  </a>
                                    

                                 <?php }?>
                              </li>
                              <li><a href="../Fai/browseVecle.html">&nbsp;&nbsp;&nbsp;Browse</a></li>
		                        <li><a href="../Manar/TERPAGE.html">&nbsp;&nbsp;&nbsp;Termonologies</a></li>
                           </ul>
                          <!-- <div class="sign_btn"><a href="#">Sign in</a></div> -->
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
    
    
  
      
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-sm-4">
                  
               </div>
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active"   id="pic-1"><img src="./../Manar/<?php echo $images[0]->path;?>" alt="car" /></div>
                                 <div class="tab-pane" id="pic-2"><img src="./../Manar/<?php echo $images[1]->path;?>" alt="car" /></div>
                                 <div class="tab-pane" id="pic-3"><img src="./../Manar/<?php echo $images[2]->path;?>" alt="car" /></div>
                                 <div class="tab-pane" id="pic-4"><img src="./../Manar/<?php echo $images[3]->path;?>" alt="car" /></div>
                              </div>
                              <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img style="height:182px;width:100%" src="./../Manar/<?php echo $images[0]->path;?>" alt="car" /></a></li>
                                 <li><a data-target="#pic-2" data-toggle="tab"><img style="height:182px;width:100%" src="./../Manar/<?php echo $images[1]->path;?>" alt="car" /></a></li>
                                 <li><a data-target="#pic-3" data-toggle="tab"><img style="height:182px;width:100%" src="./../Manar/<?php echo $images[2]->path;?>" alt="car" /></a></li>
                                 <li><a data-target="#pic-4" data-toggle="tab"><img style="height:182px;width:100%" src="./../Manar/<?php echo $images[3]->path;?>" alt="car" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                         
                           </div>
                           
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Description</h4>
                           <p>
                              <?php echo $car->description ;?>
                           </p>
                           <br>
                           
                        </div>
                        <div class="spe-a">
                           <h4>Specifications</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Fuel options</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->fuel_options;?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>gear options</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->gear_options;?></p>
                                 </div>
                              </li>
                            
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Height</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->height;?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Width</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->Width;?> </p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Model</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->model;?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Number of Cylinders</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $car->number_of_cylinders;?> Cylinders</p>
                                 </div>
                              </li>
                      
                           </ul>
                        </div>
                     </div>
                  </div>
                  <?php if(!isset($_SESSION['id'])){?>

                 <a href="./../Manar/comperpage.php?id=<?php echo $car->id;?>" class="button button1">Add to compare list</a>
               <?php }?>
               </div>
                <div class="similar-box">
                   <?php if(!isset($_SESSION['id'])){?>
                   <form action="" method="POST">
                      <h2>Write your reviwe:</h2>
                     <br>
                     <div style="margin-bottom:10px">
                        <input type="email" placeholder="Email" name="email" style="border:solid ">

                     </div>
                      <textarea   name="content" rows="8" cols="60" style="border-style:solid">
                                </textarea>
                     <button>Save</button>

                   </form>
                   <?php }?>
                  </div>
                  



     
<!-- ------------------------------------------ -->

            <div class="testimonial-heading">
            <h3>reviwes</h3>
            
        </div>            
  <div class="reviwe">
    <!--Testimonials----------------- -->
    <section id="testimonials">
        <!--heading- -->
    
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
           <?php foreach($reviews as $review){?>
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                  
                        <!--name-and-username-->
                        <div class="name-user">
                            
                            <span><?php echo $review->email;?></span>
                        </div>
                    </div>
                    <!--reviews------>
           
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p><?php echo $review->content;?></p>
                </div>
            </div>
         <?php }?>
  
            </div>
        </div>
    </section>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

      <footer>
            
         <div class="footer">
            <div class="container">
              
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                     <li><a href="../Fai/index.php">Home</a></li>
		   <li><a href="../Manar/TERPAGE.html">Termonologies</a></li>
		</ul>
		<p>@2022 Vecle. || All rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      
     <!--main js--> 
      <script src="js2/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js2/bootstrap.min.js"></script> 
      <script src="js2/bootstrap-select.min.js"></script>
      <script src="js2/slick.min.js"></script> 
      <script src="js2/select2.full.min.js"></script> 
      <script src="js2/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js2/custom.js"></script>
     
   </body>
</html>