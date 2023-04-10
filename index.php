<?php
require_once("controller/controller.php");
    $db = new mysqli('localhost','root','','mydatabase2');
    $Controller = new Hello($db);
    $Controller->show();
    $Controller->display();

// // Check if the request method is POST (to add the data)
// if(isset($_POST['call_function'])){
//   $Controller->add();
// }
      if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = $Controller->deleteData($id);
      }
      $Controller->deleteData($id);
?>