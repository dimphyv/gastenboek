<?php
require_once 'models/db_connect.php';
require_once 'controllers/addController.php';
require_once 'controllers/homeController.php';

if(isset($_GET['action']) && $_GET['action']!== ""){
  if($_GET['action']==='add'){
  $addController = new addController();
  $addController->index();

}else{
  $deleteController = new deleteController();
  $deleteController->index();
}

}else{
$homeController = new homeController();
$homeController->index();
}



 ?>
