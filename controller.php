<?php
require_once __DIR__."/../config/config.php";
require_once __DIR__."/../model/model.php";

class Controller {
    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : '';

        switch ($action) {
            case 'add':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    addEmployee($_POST['firstname'], $_POST['lastname'], $_POST['number'], $_POST['states'], $_POST['email'], $_POST['password'], $_POST['hobbies'], $_POST['gender'], $_POST['myCKEditor'],$_POST['file_name']);
                    header('Location: index.php');
                    exit;
                }
                require_once __DIR__."/../view/add.php";
                break;

            case 'edit':
                $id = $_GET['id'];
                $employee = getEmployee($id);

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    updateEmployee($id, $_POST['firstname'], $_POST['lastname'], $_POST['number'], $_POST['states'], $_POST['email'], $_POST['password'],  $_POST['hobbies'], $_POST['gender'], $_POST['myCKEditor']);
                    header('Location: index.php');
                    exit;
                }
                require_once __DIR__."/../view/edit.php";
                break;

            case 'delete':
                $id = $_GET['id'];
                deleteEmployee($id);
                header('Location: index.php');
                exit;

            default:
                $employees = getAllEmployees();
                require_once __DIR__."/../view/list.php";
                break;
        }
    }
}
?>



