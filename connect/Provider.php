<?php 
    include(__DIR__."/db.php");
    class Provider{

        public function connect(){
            try {
                return new PDO(HOSTING,DB_USER,DB_PASSWORD);
            }catch (Exception $e){
               
                return null;
            }
        }

    }
?>