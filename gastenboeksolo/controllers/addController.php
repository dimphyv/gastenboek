<?php
require_once "models/db_connect.php";

class addController {

  public function index(){
  //  if(isset($_POST['name']&& $_POST['name']!= "")){
      $naam = $_POST['name'];
      $email = $_POST['email'];
      $bericht = $_POST['bericht'];
      $table = 'berichten';
      $db = new db('localhost', 'root', '', 'gastenboek');
      $db->insertData($table,NULL, $naam, $email, $bericht);
header('location: index.php');
    }

  }
