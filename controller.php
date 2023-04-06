<?php
require_once dirname(__DIR__) . '/model/modle.php';
class Hello {
    public $Hi;
    public function __construct($db)
    {
         $this->Hi=new Hi($db);
    }
    public function add()
    {
       require_once("view/forms1.php");
    }
    public function show()
    {
        $result = $this->Hi->insert_data();
    }

    // public function edit($update)
    // {
    //     if(isset($_GET['id']))
    //     {
    //         $update = $_GET['id'];
    //         // $myrecord = $obj->edit($update);
    //     } 
    //    $sql = "SELECT * FROM regform WHERE id='$update'";
    //    $result = $this->con1->query($sql);
    //    if($result->num_rows==1)
    //    {
    //        $row = $result->fetch_assoc();
    //        return $row;
    //    }
    // }

    public function display()
    {
        $data = $this->Hi->get_data();
        require_once('view/index1.php');
    }

    // public function update($sql)
    // {
        
    //     return $this->con1->query($sql);
    // }

    function deleteData($id) {
        $result = $this->Hi->deleteData($id);
        return $result;
    }
   public function index() {
       require ('view/index1.php');  
    }  
}
?>