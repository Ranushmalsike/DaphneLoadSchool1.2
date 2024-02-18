<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////////////////////////////////////////////
//imagin pragraph

require_once '../../qry/qry.php';
require_once '../../include/dbcon.php';

   /* extract($_POST);

    $tveling = new tveling();
    $result166 = $tveling->select_join_qry($mysqli);

    $data166 = array();
    while ($row166 = $result166->fetch_assoc()) {
        $data166[] = $row166;
    }

    echo json_encode(array('data2' => $data166));

*/
//250
//if ($_POST['buttonValue'] == "250") {
    extract($_POST);
        $massage = new massage();
        $massage->sendmsg($mysqli, $name, $email, $subject, $message);
        
        // Return a response if needed
        //echo json_encode(['success' => true, 'message' => 'Permissions added successfully']);
    

//}
?>