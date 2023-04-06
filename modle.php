<?php 
// $controller = new Hello("localhost","root","","mydatabase2");

// if(isset($_GET['id']))
// {
//   $update = $_GET['id'];
//   $myrecord = $obj->edit($update);
// }    
class Hi{
  public $db;
  function __construct($db){
      $this->db = $db;
  }
      public function insert_data()
      {
        if (isset($_POST['submit'])) {
          $fname = $_POST['firstname'];
          $lname = $_POST['lastname'];
          $number = $_POST['number'];
          $states = $_POST['states'];
          $xyz=implode(", ", $states);
          $email = $_POST['email'];
          $password=$_POST['password'];
          $hobbies=$_POST['hobbies'];
          $xyz1=implode(", ",$hobbies);
          $gender=$_POST['gender'];
          $address=$_POST['myCKEditor'];
// for file upload
            $file_name = $_FILES['image']['name'];
            $file_tmp =$_FILES['image']['tmp_name'];
            // $file_size =$_FILES['image']['size'];
            // $file_type=$_FILES['image']['type'];
            // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
          move_uploaded_file($file_tmp,"./view/upload/".$file_name);
          $qry = "INSERT INTO regform (`firstname`,`lastname`,`number`,`states`,`email`,`password`,`hobbies`,`gender`,`address`,`image`) VALUES('$fname','$lname','$number','$xyz','$email','$password','$xyz1','$gender','$address','$file_name')";
          $result = $this->db->query($qry);
          return $result;
         }
         else
         {
          return "";
         }
      }
      public function get_data()
        {
            $sql = "SELECT * FROM regform";
            $result = $this->db->query($sql);
            $data = array();
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }

        function deleteData($id) {
          $query = "DELETE FROM regform WHERE id='$id'";
          $result = $this->db->query($query);
          return $result;
      }
      // public function update($sql)
      // {
      //   if(isset($_GET['id']))
      //   {
      //       $update = $_GET['id'];
      //       // $myrecord = $obj->edit($update);
      //   }  
      //   if(isset($_POST['update']))
      //   {
      //   $fname = $_POST['firstname'];
      //   $lname = $_POST['lastname'];
      //   $number = $_POST['number'];
      //   $email = $_POST['email'];


      //   $sql = "UPDATE regform SET `firstname` ='$fname',`lastname`='$lname',`number`='$number',`email`='$email' WHERE id='$update'";
      //   // header("Location:view/index.php");
      //   header("Location:table.php");

      //   }
      // }
  }

?>