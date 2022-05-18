<?php 
  session_start();
  session_destroy();
  unset($_SESSION['id']);
  header('location:./../Fai/log-in-man.php');
  echo '<script>alert("Manager logged out successfuly !");</script>';
//'<script>alert("Manager logged out successfuly !");</script>';
?>