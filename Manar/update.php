<?php 
    include('./../connect/Admin.php');
    $manger=new Manager();
    $status="";
   
    if(isset($_GET['id'])){
      $car=$manger->getCarById($_GET['id']);
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $status=$manger->validate($_POST);
      
      if($status==''){
        $_POST['id']=$_GET['id'];
        $manger->updateCar($_POST);
        $car=$manger->getLast();
        $manger->delete_all_images($_GET['id']);     
        foreach($_FILES['images']['name'] as $key=>$value){
          
          $data['car_id']=$_GET['id'];
          $source=$_FILES['images']['tmp_name'][$key];
          $destination='./images/'.$_FILES['images']['name'][$key];
          move_uploaded_file($source,$destination);
          $data['path']='./images/'.$_FILES['images']['name'][$key];
           $manger->storeImage($data);
          
    }
  }
    }
    
?>

<html>
    <head>
        <title>Update item page</title>
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
  <li><a href="man2.php">Home</a></li>
   
</ul>
 </div>
</div>
</header> 
       
<main>
<div class="divs">
  <h1>UPDATE CAR</h1>
 
  <form  action="" method="POST" enctype="multipart/form-data">
  <?php if($status!=""){?>
      <div style="background-color:red;opacity:1;padding-left:35%" class="alert alert-danger"> <?php echo $status;?></div>
      <?php }?>
    <input type="hidden" value="<?php echo $car->id;?>" name="id">
      <br>
      <div class="flexform">
        <div>
          <label>Car's Name : <input value="<?php echo $car->name;?>" type="text" name="name"></label>
        </div>
        <br>
        <div class="ddm">
          <p>Company Type : <select name="company">
              <option value=""></option>
              <option <?php if($car->company=="Mercedes"){?> selected <?php };?> value="Mercedes">Mercedes</option>
              <option <?php if($car->company=="Tayota"){?> selected <?php };?> value="Tayota">Tayota</option>
            </select></p>
        </div>

<br>


<!-- feuter -->
<div class="ddm">
          <p>Description : </p>
          <textarea name="description" value="<?php echo $car->description;?>" rows="6" cols="64"><?php echo $car->description;?></textarea>
        </div>
		<br>
		<div>
		        <div class="ddm">
          <p>Fuel options : <select name="fuel_options">
              <option value=""></option>
              <option <?php if($car->fuel_options=="Gasoline"){?> selected <?php };?> value="Gasoline">Gasoline</option>
              <option <?php if($car->fuel_options=="DieselFuel"){?> selected <?php };?> value="DieselFuel">Diesel Fuel</option>
			        <option <?php if($car->fuel_options=="Bio-diesel"){?> selected <?php };?> value="Bio-diesel">Bio-diesel</option>
              <option <?php if($car->fuel_options=="Ethanol"){?> selected <?php };?> value="Ethanol">Ethanol</option>
            </select></p>
        </div>
          <br>
        </div>
		<div class="ddm">
          <p>Gear  options : <select name="gear_options">
              <option  value=""></option>
              <option <?php if($car->gear_options=="Manually"){?> selected <?php };?> value="Manually">Manually</option>
              <option <?php if($car->gear_options=="automaticity"){?> selected <?php };?> value="automaticity">Automaticity</option>
            </select></p>
        </div>
		<br>
		<div>
          <label>Height : <input value="<?php echo $car->height;?>" type="text" name="height"></label>
        </div><br><div>
          <label>Width : <input value="<?php echo $car->Width;?>" type="text" name="width"></label>
        </div><br><div>
          <label>Model : <input value="<?php echo $car->model;?>" type="text" name="model"></label>
        </div>
		<br>
		<div>
          <label for="quantity">Number of Cylinders :</label>
<input type="number" id="quantity" value="<?php echo $car->number_of_cylinders;?>" name="number_of_cylinders" min="1" max="16">
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
   <div class="butt">
<button type="button" onclick="update(); return false;"><span></span>Submit</button>
</div>
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

    
