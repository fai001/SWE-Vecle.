<?php 
    include(__DIR__."/../connect/Admin.php");
    $admin=new Manager();

    if(isset($_GET['id'])){
            $admin->deleteCar($_GET['id']);
    }

?>