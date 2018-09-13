<?php 
  include_once('mysql2i.class.php');
include_once('mysql2i.func.php');?><?php 
session_start();
session_destroy();
header('location:adminlogin.php');   
?>
