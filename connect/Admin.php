<?php 
    session_start();
    include(__DIR__."/Provider.php");
    
    class Manager extends Provider{
        
        // login 
        public function login($data){
            $db=$this->connect();
            if($db==null){
             
                exit;
            }
            $query="SELECT * FROM manager where username=:username AND password=:password";
            $stm=$db->prepare($query);
            $stm->execute([
                ":username"=>$data['username'],
                ":password"=>$data['password']
            ]);
            $user=$stm->fetch(PDO::FETCH_OBJ);
         
            if($stm->rowCount()>0){
                $_SESSION['id']=$user->id;
                $db=null;
                header('Location:./../Manar/man2.php');
            }else{
                
                header("Location:./../Fai/log-in-man.php");
                echo '<script type="text/javascript">alert("Wrong username or password!");</script>';
            }
        }

        public function getCars($company){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM cars
                    where cars.company=:company
                ";
            $stm=$db->prepare($query);
            $stm->execute([
                ':company'=>$company
            ]);
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }

        public function get_car_by_id($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM cars
                    where cars.id=:id
                ";
            $stm=$db->prepare($query);
            $stm->execute([
                ':id'=>$id
            ]);
            $data=$stm->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }

        public function storeCar($data){

            $db=$this->connect();
            if($db==null){
                exit;
            }
            
            $query="INSERT INTO cars (name,company,fuel_options,gear_options,height,Width,model,number_of_cylinders,description)VALUES(:name,:company,:fuel_options,:gear_options,:height,:Width,:model,:number_of_cylinders,:description)";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":name"=>$data['name'],
                ":company"=>$data['company'],
                ":fuel_options"=>$data['fuel_options'],
                ":gear_options"=>$data['gear_options'],
                ":height"=>$data['height'],
                ":Width"=>$data['width'],
                ":model"=>$data['model'],
                ":number_of_cylinders"=>$data['number_of_cylinders'],
                ":description"=>$data['description']
            ]);
            $db=null;
            if($bool){
                return true;
                //echo "<script>alert('Car is successfuly added!');</script>";
            }else{
                return false;
            }

        }

        public function store_manager($data){

            $db=$this->connect();
            if($db==null){
                exit;
            }
            
            
            $query="INSERT INTO manager (name,username,password)VALUES(:name,:username,:password)";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":name"=>$data['name'],
                ":username"=>$data['username'],
                ":password"=>$data['password'],
              
            ]);
            $db=null;
            if($bool){
                return true;
            }else{
                return false;
            }

        }

        

        public function getLast(){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $q = $db->query("SELECT * FROM cars ORDER BY id DESC LIMIT 1");
            $data=$q->fetch(PDO::FETCH_OBJ); 
           
            return $data;
        }

        public function getCarById($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM cars where id=:id";
            $stm=$db->prepare($query);
            $stm->execute([
                "id"=>$id,
            ]);
            $data=$stm->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }
        public function getCarByValue($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM cars where  name like :name or company like :company or fuel_options like :fuel_options or model like :model";
            $stm=$db->prepare($query);
            $stm->execute([
                ":name"=>$id,
                ":company"=>$id,
                ":fuel_options"=>$id,
                ":model"=>$id,
            ]);
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }

        public function getUserById($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM manager";
            $stm=$db->query($query);
           
            $data=$stm->fetch(PDO::FETCH_OBJ);
            $db=null;
            return $data;
        }

        public function updateCar($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="UPDATE cars SET name=:name,company=:company,fuel_options=:fuel_options,gear_options=:gear_options,height=:height,Width=:Width,model=:model,number_of_cylinders=:number_of_cylinders,description=:description where id=:id";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":name"=>$data['name'],
                ":company"=>$data['company'],
                ":fuel_options"=>$data['fuel_options'],
                ":gear_options"=>$data['gear_options'],
                ":height"=>$data['height'],
                ":Width"=>$data['width'],
                ":model"=>$data['model'],
                ":description"=>$data['description'],
                ":number_of_cylinders"=>$data['number_of_cylinders'],
                ":id"=>$data['id']
            ]);
            if($bool){
              
            }else{
                echo '<script type="text/javascript">alert("Somethings was wrong !");</script>';
            }
        }

        /*public function updateCar($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="UPDATE cars SET name=:name,company=:company,fuel_options=:fuel_options,gear_options=:gear_options,height=:height,Width=:Width,model=:model,number_of_cylinders=:number_of_cylinders where id=:id";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":name"=>$data['name'],
                ":company"=>$data['company'],
                ":fuel_options"=>$data['fuel_options'],
                ":gear_options"=>$data['gear_options'],
                ":height"=>$data['height'],
                ":Width"=>$data['Width'],
                ":model"=>$data['model'],
                ":number_of_cylinders"=>$data['number_of_cylinders'],
                ":id"=>$data['id']
            ]);
            if($bool){
                $db=null;
                header('Location:./../Manar/man2.php');
            }else{
                echo '<script type="text/javascript">alert("Somethings was wrong !");</script>';
            }
        }*/

        public function deleteCar($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="DELETE FROM cars where id=:id";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":id"=>$id
            ]);
            if($bool){
                $db=null;
                header('Location:./../Manar/man2.php');
            }else{
                echo '<script type="text/javascript">alert("Somethings was wrong !");</script>';
            }
        }

        public function storeImage($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="INSERT INTO images (path,car_id)VALUES(:path,:car_id)";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":path"=>$data['path'],
                ":car_id"=>$data['car_id']
            ]);
            if($bool){
                $db=null;
                return true;
            }
        }

        public function updateImage($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="UPDATE  images SET path=:path where car_id=:car_id ";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":path"=>$data['path'],
                ":car_id"=>$data['car_id'],
        
            ]);
            /*if($bool){
                $db=null;
                header('Location:./../Manar/man2.php');

            }*/
        }

        public function compare($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="INSERT INTO compare (cars_id) VALUES (:cars_id)";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ":cars_id"=>$data
            ]);
            if($bool){
                $db=null;
                header('Location:'.$_SERVER['PHP_SELF']);
            }
            
        }

        public function get_all_compare(){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM compare";
            $stm=$db->query($query);
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        public function get_first_image($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM images where car_id=:id";
            $stm=$db->prepare($query);
            $stm->execute([
                ":id"=>$id
            ]);
         
            $data=$stm->fetch(PDO::FETCH_OBJ);
           
            return $data;

        }

        public function get_all_car_images($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="SELECT * FROM images where car_id=:id";
            $stm=$db->prepare($query);
            $stm->execute([
                ":id"=>$id
            ]);
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            return $data;

        }
        public function get_all_reviews($car_id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query='SELECT * FROM  review  where car_id=:car_id';
            $stm=$db->prepare($query);
            $stm->execute([
                ":car_id"=>$car_id
            ]);
            $data=$stm->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        
        public function insert_rview($data){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="INSERT INTO review (email,content,car_id) VALUES(:email,:content,:car_id)";
            $stm=$db->prepare($query);
            $bool=$stm->execute([
                ':email'=>$data['email'],
                ":content"=>$data['content'],
                ":car_id"=>$data['car_id'],


            ]);
            return true;
        }

        public function validate($data){
            $status='';
            $name=htmlspecialchars($data['name']);
            $company=htmlspecialchars($data['company']);
            $fuel_options=htmlspecialchars($data['fuel_options']);
            $gear_options=htmlspecialchars($data['gear_options']);
            $height=htmlspecialchars($data['height']);
            $Width=htmlspecialchars($data['width']);
            $model=htmlspecialchars($data['model']);
            $number_of_cylinders=htmlspecialchars($data['number_of_cylinders']);
            $description=htmlspecialchars($data['description']);
            if(empty($name)){
                $status.="Name is required "."<br/>";
            }
            if(empty($company)){
                $status.="Company is required  <br/>";          
            }
            if(empty($fuel_options)){
                $status.="Fuel options is required <br/>";
            }
            if(empty($gear_options)){
                $status.="Gear options <br/>";
            }
            if(empty($height)){
                $status.="Height is required <br/>";
            }
            if(empty($Width)){
                $status.="Width is required <br/>";
            }
            if(empty($model)){
                $status.="Model is required  <br/>";
            }
            if(empty($number_of_cylinders)){
                $status.="Number of cylinder is required is required <br/>";
            }
            if(empty($description)){
                $status.="desription is required <br/>";
            }
            return $status;
        }
        public function delete_all_images($id){
            $db=$this->connect();
            if($db==null){
                exit;
            }
            $query="DELETE FROM images where car_id=:id";
            $stm=$db->prepare($query);
            $stm->execute([
                ":id"=>$id
            ]);

        }

       
    }
?>