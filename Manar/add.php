<?php 
include("./../connect/Admin.php");
$manger=new Manager();
$status="";

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $status=$manger->validate($_POST);
    
    if($status==""){
      $manger->storeCar($_POST);
      $car=$manger->getLast();
      $data['car_id']=$car->id;
      foreach($_FILES['images']['name'] as $key=>$value){
        $source=$_FILES['images']['tmp_name'][$key];
        $destination='./images/'.$_FILES['images']['name'][$key];
        move_uploaded_file($source,$destination);
        $data['path']=$destination;
        $manger->storeImage($data);
        
      }echo '<script>alert("Car is successfuly added!");</script>';

    }
  }
?>
<html>
    <head>
        <title>Add item page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="addcss.css">
<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 -->		<script src="Home.js"></script>
    </head>
    <body>
        
        
        <header>
<div class="banner"> 
  <div class="navbar"> 
   <img src="img/logo.jpeg"  class="logo" alt="logo">
<ul>
  <li><a href="man2.php">Home</a></li>
   
</ul>
 </div>
</div>
</header> 
       
<main>
<div class="divs">
 
  <h1>ADD NEW CAR</h1>
  
  <form  action="" method="POST" enctype="multipart/form-data">
    <?php if($status!=""){?>
      <div style="background-color:red;opacity:1;padding-left:35%" class="alert alert-danger"> <?php echo $status;?></div>
      <?php }?>
      <br>
      <div class="flexform">
        <div>
          <label>Car's Name : <input type="text" name="name"></label>
        </div>
        <br>
        <div class="ddm">
          <p>Company Type : <select name="company">
              <option value=""></option>
              <option value="Mercedes">Mercedes</option>
              <option value="Tayota">Tayota</option>
            </select></p>
        </div>

<br>


<!-- feuter -->
<div class="ddm">
          <p>Description : </p>
          <textarea name="description" rows="6" cols="64">Type your description here</textarea>
        </div>
		<br>
		<div>
		        <div class="ddm">
          <p>Fuel options : <select name="fuel_options">
              <option value=""></option>
              <option value="Gasoline">Gasoline</option>
              <option value="DieselFuel">Diesel Fuel</option>
			  <option value="Bio-diesel">Bio-diesel</option>
              <option value="Ethanol">Ethanol</option>
            </select></p>
        </div>
          <br>
        </div>
		<div class="ddm">
          <p>Gear  options : <select name="gear_options">
              <option value=""></option>
              <option value="Manually">Manually</option>
              <option value="automaticity">Automaticity</option>
			  
            </select></p>
        </div>
		<br>
		<div>
          <label>Height : <input type="text" name="height"></label>
        </div><br><div>
          <label>Width : <input type="text" name="width"></label>
        </div><br><div>
          <label>Model : <input type="text" name="model"></label>
        </div>
		<br>
		<div>
          <label for="quantity">Number of Cylinders :</label>
<input type="number" id="quantity" name="number_of_cylinders" min="1" max="16">
        </div>
        <br>
        <div>
          <label for="files">Attachments : </label>
          <input name="images[]" type="file" class="form-control" multiple="multiple"  id="files" >

        </div>
        <br>
       
		
      </div>
      <div class="butt">
       <button style="color:black" type="submit" ><span></span>Submit</button>
  </div>
    
    </form>
  </div>
  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
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
  <li><a href="man2.html">Home</a></li>
  
</ul>
<p>@2022 Vecle. || All rights Reserved</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

    
</html>

    
