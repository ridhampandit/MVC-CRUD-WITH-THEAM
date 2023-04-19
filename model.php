<?php
class Model{
  private $db;
  public function __construct(){

  $host = 'localhost';
  $dbname = 'mydatabase2';
  $username = 'root';
  $password = '';

  try {
      $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  } catch(PDOException $e) {
      die("Error connecting to database: " . $e->getMessage());
  }
  }
function getAllEmployees() {
    // global $db;
    $stmt = $this->db->prepare('SELECT * FROM regform');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addEmployee($firstname, $lastname, $number, $states, $email, $password, $hobbies, $gender, $address,$file_name) {
  $upload_folder = './view/upload/';
  $xyz=implode(", ", $states); 
  $xyz1=implode(", ", $hobbies);
  foreach ($_FILES['image']['tmp_name'] as $i => $file_tmp){
    $file_name = $_FILES['image']['name'][$i];
    move_uploaded_file($file_tmp, $upload_folder.$file_name); 
    $upload_file[] = $file_name; 
  }
    $img = implode(", ", $upload_file);
  // global $db;
    $stmt = $this->db->prepare('INSERT INTO regform (`firstname`, `lastname`, `number`, `states`,`email`, `password`, `hobbies`, `gender`, `address`,`image`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $result = $stmt->execute([$firstname, $lastname, $number, $xyz, $email, $password, $xyz1, $gender, $address, $img]);
    return $result;
}

function getEmployee($id) {
    // global $db;
    $stmt = $this->db->prepare('SELECT * FROM regform WHERE id = ?');
    $stmt->execute([$id]);
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updateEmployee($id, $firstname, $lastname, $number, $states, $email, $password, $hobbies, $gender, $address) {
  Model::getEmployee($id);
  $xyz=implode(", ", $states); 
  $xyz1=implode(", ", $hobbies);
  $file_name = $_FILES['image']['name'];
  $file_tmp =$_FILES['image']['tmp_name'];
  move_uploaded_file($file_tmp,"./view/upload/".$file_name); 
    global $db;
    if($file_name!=""){
      $stmt = $this->db->prepare('SELECT * FROM regform WHERE id = ?');
      $stmt->execute([$id]);
      if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $del = $result['image'];
       }
       unlink("./view/upload/".$del);
    $stmt = "UPDATE regform SET `firstname` = '$firstname', `lastname` = '$lastname', `number`= '$number', `states`= '$xyz', `email`= '$email',`password` = '$password', `hobbies` = '$xyz1',`gender`= '$gender', `address`= '$address', `image` = '$file_name'  WHERE id = '$id'";
    $result=$this->db->query($stmt);
  }else{
    $stmt = "UPDATE regform SET `firstname` = '$firstname', `lastname` = '$lastname', `number`= '$number', `states`= '$xyz', `email`= '$email',`password` = '$password', `hobbies` = '$xyz1',`gender`= '$gender', `address`= '$address'  WHERE id = '$id'";
    $result=$this->db->query($stmt);
  }
    return $result;
}

function deleteEmployee($id) {
  Model:: getEmployee($id);
    // global $db;
    $stmt = $this->db->prepare('SELECT * FROM regform WHERE id = ?');
    $stmt->execute([$id]);
    if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      $del = $result['image'];
     }
     unlink("./view/upload/".$del);
    $stmt = $this->db->prepare('DELETE FROM regform WHERE id = ?');
    $stmt->execute([$id]);
}
}