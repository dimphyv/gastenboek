<?php
require_once 'models/db_connect.php';

 class homeController {

  public function index(){
$db = new db('localhost', 'root', '', 'gastenboek');
$result = $db->getAllData('berichten');
    include_once 'views/home/index.php';

  }
}
