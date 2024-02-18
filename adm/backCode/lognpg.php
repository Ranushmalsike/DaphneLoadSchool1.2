<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require_once '../../include/dbcon.php';
//require_once 'sessionManger.php';


class qry_execute {
    public $mysqli;
    public $value; // Declare the property explicitly

    /*public function __construct() {
        $this->value = ""; // Initialize the value property
    }*/

    public function executeqry() {
        $sql = $this->value;
        $mysqli = $this->mysqli;

        try {
            $result = $mysqli->query($sql);
            if ($result === FALSE) {
                echo "Error executing query: " . $mysqli->error;
                return null;
            }

            return $result;
        } catch (PDOException $e) {
            // Handle any exceptions (e.g., display an error message)
            echo "Error: " . $e->getMessage();
        }
    }
}

class mainSec {
   // public $sessionAbout;
    public $createTB;

    public function __construct() {
        //$this->sessionAbout = new sessionMangerAll;
        $this->createTB = new qry_execute();
    }

    // all_login
    public function all_login($mysqli, $username, $password) {
        // first destroy the session
       // $this->sessionAbout->destroy_Session();

        $sql_check1 = "SELECT COALESCE(`username`, `passwordsec`) FROM `adm` WHERE `username` = '$username' AND `passwordsec` = SHA2('$password', 256)";
        $sql_check2 = "SELECT COALESCE( `user_name`, `passwordsec`) FROM `super_user` WHERE `user_name` = '$username' AND `passwordsec` = SHA2('$password', 256)";
        $sql_check3 = "SELECT `empid`, `codeR`, `user_name`, `passwordsec` FROM `employ_teacher` WHERE `user_name` = '$username' AND `passwordsec` = SHA2('$password', 256)";
        

        if (($this->createTB->value = $sql_check1) && ($this->createTB->mysqli = $mysqli) && mysqli_num_rows($this->createTB->executeqry()) > 0) {
            $this->adm_login($mysqli, $username, $password);
            echo "1";
            //$response = array('status' => '1');
            //echo json_encode($response);
        } elseif (($this->createTB->value = $sql_check2) && ($this->createTB->mysqli = $mysqli) && mysqli_num_rows($this->createTB->executeqry()) > 0) {
            $this->supper_user_loging($mysqli, $username, $password);
            echo "2";
            //$response = array('status' => '1');
            //echo json_encode($response);
        } elseif (($this->createTB->value = $sql_check3) && ($this->createTB->mysqli = $mysqli) && mysqli_num_rows($this->createTB->executeqry()) > 0) {
            $this->teacher_login($mysqli, $username, $password);
            //$response = array('status' => '1');
            //echo json_encode($response);
            echo "3";
        } else {
            echo "0";
            //$response = array('status' => '0');
            //echo json_encode($response);
        }
    }

    // session manage
public function session_manage($countOfrow, $rowResult) {
    // Start the session
    
    $_SESSION['makeSessionVR'] = $countOfrow;
    $i = 1;

    try {
        // Check if there are rows
        if ($rowResult->num_rows > 0) {
            
            // Output data of each row using a do-while loop
            while (($row = $rowResult->fetch_assoc())) {


                 $_SESSION['code_'.$i] = $row["permission"];

                if ($i == 1) {
                    $_SESSION['emp'] = $row["empid"];
                     $_SESSION['empName'] = $row["username"];
                }
                
                $i++;
            }
        } else {
            echo "No users found in the specified range.";
        }

    } catch (PDOException $e) {
        // Handle any exceptions (e.g., display an error message)
        echo "Error: " . $e->getMessage();
    }
}
    // Admin_login
    private function adm_login($mysqli, $username, $password) {
        // admin
        $sql_check4 = "SELECT `adm`.`empid` as `empid`, `adm`.`codeR` as `code`, `adm`.`username` as `username`, `adm`.`email` as `email` , `adm`.`passwordsec` as `pass`, `permissionManagerTb`.`permission` as `permission` FROM `adm` JOIN `permissionManagerTb` ON `adm`.`empid` = `permissionManagerTb`.`empid` WHERE `adm`.`username` = '$username' AND `adm`.`passwordsec` = SHA2('$password', 256)";
        $this->createTB->value = $sql_check4; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();

        //i want to count the rows 
        $countOfrow = mysqli_num_rows($rowResult);
        $this->session_manage($countOfrow, $rowResult);

        $randomNumber = random_int(1, 1000);
        $getid = $_SESSION['emp'];
        $srm = "UPDATE `adm` SET `codeR` = '$randomNumber' WHERE `empid` = '$getid'";
        $this->createTB->value = $srm; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();
    }

    // super user login
    private function supper_user_loging($mysqli, $username, $password) {
        // Super User
        $sql_check4 = "SELECT `super_user`.`empid` as `empid`, `super_user`.`Code` as `code`, `super_user`.`user_name` as `username`, `super_user`.`email` as `email` , `super_user`.`passwordsec` as `pass`, `permissionManagerTb`.`permission` as `permission` FROM `super_user` JOIN `permissionManagerTb` ON `super_user`.`empid` = `permissionManagerTb`.`empid`  WHERE `super_user`.`user_name` = '$username' AND `super_user`.`passwordsec` = SHA2('$password', 256)";
        $this->createTB->value = $sql_check4; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();
         //i want to count the rows 
        $countOfrow = mysqli_num_rows($rowResult);
        $this->session_manage($countOfrow, $rowResult);

        $randomNumber = random_int(1, 1000);
        $getid = $_SESSION['emp'];
        $srm = "UPDATE `super_user` SET `Code` = '$randomNumber' WHERE `empid` = '$getid'";
        $this->createTB->value = $srm; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();        
    }

    // Teacher Login
    private function teacher_login($mysqli, $username, $password) {
        // Teacher
        $sql_check4 = "SELECT `employ_teacher`.`empid` as `empid`, `employ_teacher`.`codeR` as `code`, `employ_teacher`.`user_name` as `username`, `employ_teacher`.`passwordsec` as `pass`, `permissionManagerTb`.`permission` as `permission` FROM `employ_teacher` JOIN `permissionManagerTb` ON `employ_teacher`.`empid` = `permissionManagerTb`.`empid` WHERE `employ_teacher`.`user_name` = '$username' AND `employ_teacher`.`passwordsec` = SHA2('$password', 256)";
        $this->createTB->value = $sql_check4; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();
         //i want to count the rows 
        $countOfrow = mysqli_num_rows($rowResult);
        $this->session_manage($countOfrow, $rowResult);

        $randomNumber = random_int(1, 1000);
        $getid = $_SESSION['emp'];
        $srm = "UPDATE `employ_teacher` SET `codeR` = '$randomNumber' WHERE `empid` = '$getid'";
        $this->createTB->value = $srm; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $rowResult = $this->createTB->executeqry();   

    }
}

// Get the button value from the request
if ($_POST['buttonValue'] == "200") {
    extract($_POST);
    $mainSec = new mainSec();
    $mainSec->all_login($mysqli, $username, $password);
}
