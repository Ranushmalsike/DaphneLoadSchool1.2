<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////////////////////////////////////////////
//imagin pragraph

require_once '../../qry/qry.php';
require_once '../../include/dbcon.php';

    extract($_POST);

    $tveling = new tveling();
    $result161 = $tveling->select_trvl_infor_select($mysqli);

    $dataLB = array();
    while ($row161 = $result161->fetch_assoc()) {
        $dataLB[] = $row161;
    }

    echo json_encode(array('data' => $dataLB));


?>