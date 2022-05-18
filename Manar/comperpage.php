<?php 
   include(__DIR__."/../connect/Admin.php");
   $admin=new Manager();
   if(isset($_GET['id'])){
      $admin->compare($_GET['id']);
   }
  $compare=$admin->get_all_compare();
 

?>


<html>
    <head>
        <title>Comparison page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="addcss.css">
		<script src="Home.js"></script>
    </head>
    <body>
        
        
        <header>
<div class="banner"> 
  <div class="navbar"> 
   <img src="img/logo.jpeg"  class="logo" alt="logo">
<ul>
  <li><a href="../Fai/index.php">Home</a></li>
   
</ul>
 </div>
</div>
</header> 
       
<main>
<h1>Comparison Table </h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<div class="container">

  <table class="rwd-table">
    <tbody>
      <tr>
        <th>Car Name </th>
        <th>Fuel options</th>
        <th>Gear options</th>
        <th>Height</th>
        <th>Width</th>
        <th>Model</th>
		<th>Number of Cylinders</th>
      </tr>
      <tr>
        <?php foreach($compare as $item){ ?>
          <?php 
            $car=$admin->get_car_by_id($item->cars_id);  
          ?>
        <td data-th="Supplier Code">
          <?php echo $car->name;?>
        </td>
        <td data-th="Supplier Name">
          <?php echo $car->fuel_options;?>
        </td>
        <td data-th="Invoice Number">
          <?php echo $car->gear_options;?>
        </td>
        <td data-th="Invoice Date">
          <?php echo $car->height;?>
        </td>
        <td data-th="Due Date">
          <?php echo $car->Width;?>
        </td>
        <td data-th="Net Amount">
         <?php echo $car->model;?>
        </td>
		<td data-th="Net Amount">
          <?php echo $car->number_of_cylinders;?>
        </td>
      </tr>
   <?php }?>
      
    </tbody>
  </table>
 
</div>
</main>
            
<footer> 
   <div class="waves">
 <div class="wave" id="wave1"></div>
 <div class="wave" id="wave2"></div>
 <div class="wave" id="wave3"></div>
 <div class="wave" id="wave4"></div>
<!--</div>
   <ul class="social_icon"> 
  <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
  <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
  <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
  <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>-->
<ul class="menu">
  <li><a href="../Fai/index.html">Home</a></li>
  
</ul>
<p>@2022 Vecle. || All rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

    
</html>

    
