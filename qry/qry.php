<?php


//execute qry
class excu
{
    public $mysqli;
    public $value; // Declare the property explicitly

    public function executeqry()
    {
        // Execute SQL query
        $sql = $this->value;
        $mysqli = $this->mysqli;

        $result = $mysqli->query($sql);

        if ($result === FALSE) {
            echo "Error executing query: " . $mysqli->error;
            return null;
        }

        return $result;
    }
}

//check values TB front_pg_one
class front_pg_one_TB{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * FROM front_pg_one";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

                //100
                class btn100
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn100_paragraph($mysqli, $floatingTextarea)
                    {
                        $getcondition = new front_pg_one_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_one` SET `paragraph`='$floatingTextarea' WHERE `pg_one_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_one`(`paragraph`) VALUES ('$floatingTextarea')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }

//check TB front two
class front_pg_two_TB{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * FROM front_pg_two";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

                //102
                class btn102
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn102_paragraph($mysqli, $floatingTextarea)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_two` SET `paragraph1`='$floatingTextarea' WHERE `pg_two_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_two`(`paragraph1`) VALUES ('$floatingTextarea')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }


                //104
                class btn104
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }
                    //104_1
                    public function btn104_1_paragraph($mysqli, $floatingTextarea1)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_two` SET `paragraph2`='$floatingTextarea1' WHERE `pg_two_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_two`(`paragraph2`) VALUES ('$floatingTextarea1')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    //104_2
                    public function btn104_2_paragraph($mysqli, $floatingTextarea2)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_two` SET `paragraph3`='$floatingTextarea2' WHERE `pg_two_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_two`(`paragraph3`) VALUES ('$floatingTextarea2')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }

                    //104_3
                    public function btn104_3_paragraph($mysqli, $floatingTextarea3)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_two` SET `paragraph4`='$floatingTextarea3' WHERE `pg_two_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_two`(`paragraph4`) VALUES ('$floatingTextarea3')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }

                //106
                class btn106
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn106_paragraph($mysqli, $floatingTextarea1)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `front_pg_two` SET `paragraph5`='$floatingTextarea1' WHERE `pg_two_id`='1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `front_pg_two`(`paragraph5`) VALUES ('$floatingTextarea1')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }
                                
                //108
                class btn108
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn108_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_one_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                                        // Check if the record exists
                            $showpgOne = "SELECT `paragraph` FROM `front_pg_one`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }

                        } else {
                            // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

                //109
                class btn109
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn109_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `paragraph1` FROM `front_pg_two`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph1'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

                //110
                class btn110
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn110_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `paragraph2` FROM `front_pg_two`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph2'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

                //111
                class btn111
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn111_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `paragraph3` FROM `front_pg_two`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph3'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

                //112
                class btn112
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn112_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `paragraph4` FROM `front_pg_two`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph4'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

                //113
                class btn113
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    public function btn113_paragraph_show($mysqli)
                    {
                        $getcondition = new front_pg_two_TB();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `paragraph5` FROM `front_pg_two`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['paragraph5'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                }

//check vission and mission
class vission_and_mission {
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * /*`v_m_id`, `small_paragraph`, `vision_paragraph`, `mission_paragraph`*/ FROM `vision_mission`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}


                //vission and mission section
                class vission_mission
                {
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }
                    //114
                    public function btn114($mysqli)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT /*`v_m_id`,*/ `small_paragraph` /*, `vision_paragraph`, `mission_paragraph`*/ FROM `vision_mission`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['small_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                    
                    //115
                    public function btn115($mysqli)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT /*`v_m_id`, `small_paragraph` , */ `vision_paragraph` /*, `mission_paragraph`*/ FROM `vision_mission`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['vision_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }

                    //116
                    public function btn116($mysqli)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT /*`v_m_id`, `small_paragraph` ,  `vision_paragraph`,*/ `mission_paragraph` FROM `vision_mission`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['mission_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }


                    //117
                    public function btn117($mysqli)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT /*`v_m_id`, `small_paragraph` ,  `vision_paragraph`,*/ `mission_paragraph` FROM `vision_mission`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['mission_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }

                    //118
                    public function btn118($mysqli)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT /*`v_m_id`, `small_paragraph` ,  `vision_paragraph`,*/ `mission_paragraph` FROM `vision_mission`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['mission_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }

                    //119
                    public function btn119($mysqli, $floatingTextarea)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `vision_mission` SET `small_paragraph`= '$floatingTextarea' /*,`vision_paragraph`= '' ,`mission_paragraph`= '' */ WHERE `v_m_id` =  '1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `vision_mission`(`small_paragraph`) VALUES ('$floatingTextarea')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }

                    //121_1
                    public function btn121_1($mysqli, $floatingTextarea1)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `vision_mission` SET /*`small_paragraph`= '$floatingTextarea' ,*/ `vision_paragraph`= '$floatingTextarea1' /*,`mission_paragraph`= '' */ WHERE `v_m_id` =  '1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `vision_mission`(`vision_paragraph`) VALUES ('$floatingTextarea1')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }

                    //121_2
                    public function btn121_2($mysqli, $floatingTextarea2)
                    {
                        $getcondition = new vission_and_mission();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `vision_mission` SET /*`small_paragraph`= '$floatingTextarea' , `vision_paragraph`= '$floatingTextarea1' ,*/ `mission_paragraph`= '$floatingTextarea2'  WHERE `v_m_id` =  '1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `vision_mission`(`mission_paragraph`) VALUES ('$floatingTextarea2')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }

                }

//call to us
class contactwith {
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * /*`ctu_id`, `sch_name`, `paragraph_call`, `address`, `telephone_number1`, `telephone_number2`, `location_gps`*/ FROM `call_to_us`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

            class contactUs{

                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }

                //123_1
                public function btn123_1($mysqli, $schoolname)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET `sch_name`='$schoolname' /*,`paragraph_call`='',`address`='',`telephone_number1`='',`telephone_number2`='',`location_gps`=''*/ WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(`sch_name`) VALUES ('$schoolname')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }

                //123_2
                public function btn123_2($mysqli, $tel1)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET /*`sch_name`='$schoolname' ,`paragraph_call`='',`address`='',*/ `telephone_number1`='$tel1' /*,`telephone_number2`='',`location_gps`=''*/ WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(/*`sch_name` , `paragraph_call`, `address`, */ `telephone_number1` /*, `telephone_number2`, `location_gps`*/) VALUES ('$tel1')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }         

                //123_3
                public function btn123_3($mysqli, $tel2)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET /*`sch_name`='$schoolname' ,`paragraph_call`='',`address`='', `telephone_number1`='$tel1' ,*/ `telephone_number2`='$tel2' /*,`location_gps`=''*/ WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(/*`sch_name` , `paragraph_call`, `address`, `telephone_number1` ,*/ `telephone_number2` /*, `location_gps`*/) VALUES ('$tel2')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }        
                
                //123_4
                public function btn123_4($mysqli, $adr1)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET /*`sch_name`='$schoolname' ,`paragraph_call`='',*/ `address`='$adr1'/*, `telephone_number1`='$tel1' ,`telephone_number2`='$tel2' ,`location_gps`=''*/ WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(/*`sch_name` , `paragraph_call`,*/ `address` /*, `telephone_number1` , `telephone_number2` , `location_gps`*/) VALUES ('$adr1')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }  
                
                //123_5
                public function btn123_5($mysqli, $gps1)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET /*`sch_name`='$schoolname' ,`paragraph_call`='', `address`='$adr1', `telephone_number1`='$tel1' ,`telephone_number2`='$tel2' ,*/ `location_gps`='$gps1' WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(/*`sch_name` , `paragraph_call`, `address`, `telephone_number1` , `telephone_number2` , */ `location_gps`) VALUES ('$gps1')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }

                //123_6
                public function btn123_6($mysqli, $call1)
                {
                    $getcondition = new contactwith();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $updateQuery = "UPDATE `call_to_us` SET /*`sch_name`='$schoolname' ,*/ `paragraph_call`='$call1' /*, `address`='$adr1', `telephone_number1`='$tel1' ,`telephone_number2`='$tel2' , `location_gps`='$gps1'*/ WHERE `ctu_id`= '1'";
                        $this->createTB->value = $updateQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        $insertQuery = "INSERT INTO `call_to_us`(/*`sch_name` ,*/ `paragraph_call` /*, `address`, `telephone_number1` , `telephone_number2` , `location_gps`*/) VALUES ('$call1')";
                        $this->createTB->value = $insertQuery; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }
                }
                
                    // >> 125
                    // ** view Contact Us Details
                    public function btn125($mysqli)
                    {
                        $getcondition = new contactwith();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `ctu_id`, `sch_name`, `paragraph_call`, `address`, `telephone_number1`, `telephone_number2`, `location_gps` FROM `call_to_us`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }
                    //Homebtn125
                    public function Homebtn125($mysqli)
                    {
                        $getcondition = new contactwith();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $showpgOne = "SELECT `ctu_id`, `sch_name`, `paragraph_call`, `address`, `telephone_number1`, `telephone_number2`, `location_gps` FROM `call_to_us`";
                            $this->createTB->value = $showpgOne; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            /*while ($row = $result->fetch_assoc()) {
                                $paragraph = $row['mission_paragraph'];
                                // Process or display the fetched data as needed
                                echo $paragraph;
                            }*/
                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }                                     

            }
//quiz
class quizcl {
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * FROM `qiztb`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}            
            //quiz insert view update
            class quizdetect{
                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }

                // btn 127
                public function btn127($mysqli){
                    $getcondition = new quizcl();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $showpgOne = "SELECT `qiz_id`, `quiz`, `answer` FROM `qiztb`";
                        $this->createTB->value = $showpgOne; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();

                        
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        echo "No found";
                    }                    
                }
                // btn 127_1
                public function btn127home($mysqli, $fir){
                    $getcondition = new quizcl();
                    $result = $getcondition->check_select($mysqli);

                    // Check if $result is not null and is an object
                    if ($result && $result->num_rows > 0) {
                        // Update query
                        $showpgOne = "SELECT `qiz_id`, `quiz`, `answer` FROM `qiztb` LIMIT $fir, 1";
                        $this->createTB->value = $showpgOne; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();

                        
                    } else {
                        // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                        echo "No found";
                    }                    
                }                

                // btn128_0
                public function btn128_0($mysqli, $quiz, $answer) {

                    $sql_check = "SELECT `quiz`, `answer` FROM `qiztb` WHERE `qiz_id` = '1'";
                    $this->createTB->value = $sql_check; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $result = $this->createTB->executeqry();

                    if($quiz != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `quiz`='$quiz'  WHERE `qiz_id` = '1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`quiz`) VALUES ('$quiz')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    if($answer != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `answer`='$answer'  WHERE `qiz_id` = '1'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`answer`) VALUES ('$answer')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }

                }
                
                // btn128_1            
                public function btn128_1($mysqli, $quiz, $answer) {
                    $sql_check = "SELECT `quiz`, `answer` FROM `qiztb` WHERE `qiz_id` = '2'";
                    $this->createTB->value = $sql_check; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $result = $this->createTB->executeqry();

                    if($quiz != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `quiz`='$quiz'  WHERE `qiz_id` = '2'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`quiz`) VALUES ('$quiz')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    if($answer != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `answer`='$answer'  WHERE `qiz_id` = '2'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`answer`) VALUES ('$answer')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }
                
                // btn128_2            
                public function btn128_2($mysqli, $quiz, $answer) {
                    $sql_check = "SELECT `quiz`, `answer` FROM `qiztb` WHERE `qiz_id` = '3'";
                    $this->createTB->value = $sql_check; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $result = $this->createTB->executeqry();

                    if($quiz != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `quiz`='$quiz'  WHERE `qiz_id` = '3'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`quiz`) VALUES ('$quiz')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    if($answer != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `answer`='$answer'  WHERE `qiz_id` = '3'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`answer`) VALUES ('$answer')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }
            
                // btn128_3                
                public function btn128_3($mysqli, $quiz, $answer) {
                    $sql_check = "SELECT `quiz`, `answer` FROM `qiztb` WHERE `qiz_id` = '4'";
                    $this->createTB->value = $sql_check; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $result = $this->createTB->executeqry();

                    if($quiz != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `quiz`='$quiz'  WHERE `qiz_id` = '4'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`quiz`) VALUES ('$quiz')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    if($answer != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `answer`='$answer'  WHERE `qiz_id` = '4'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`answer`) VALUES ('$answer')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                }     
                
                // btn128_4
                public function btn128_4($mysqli, $quiz, $answer) {
                    $sql_check = "SELECT `quiz`, `answer` FROM `qiztb` WHERE `qiz_id` = '5'";
                    $this->createTB->value = $sql_check; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $result = $this->createTB->executeqry();

                    if($quiz != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `quiz`='$quiz'  WHERE `qiz_id` = '5'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`quiz`) VALUES ('$quiz')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                    if($answer != ""){
                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $updateQuery = "UPDATE `qiztb` SET `answer`='$answer'  WHERE `qiz_id` = '5'";
                            $this->createTB->value = $updateQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `qiztb`(`answer`) VALUES ('$answer')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                        }
                    }
                } 

            }

//event
class eventEV {
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli, $title, $description, $newFileName)
    {
        // Check if the record exists
        $sql_check = "SELECT * FROM `event` WHERE (`event_header` = '$title' AND `publish_date` = CURRENT_DATE) AND `event_description` = '$description'";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
} 

//event
class eventEV2 {
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT * FROM `event`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}


            //quiz insert view update
            class eventadd{
                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }

                // btn 127
                public function btn129($mysqli, $title, $description, $newFileName){
                    $getcondition = new eventEV();
                    $result = $getcondition->check_select($mysqli, $title, $description, $newFileName);

                    if ($result && $result->num_rows > 0) {

                    }
                    else{
                        $evtadd = "INSERT INTO `event`(`event_header`, `event_description`, `publish_date`, `image`) VALUES ('$title','$description', CURRENT_DATE ,'$newFileName')";
                        $this->createTB->value = $evtadd; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();

                    }
                    
                }
                    //131
                    public function btn131($mysqli)
                    {
                        $getcondition = new eventEV2();
                        $result = $getcondition->check_select($mysqli);

                        // Check if $result is not null and is an object
                        if ($result && $result->num_rows > 0) {
                            // Update query
                            $evnt1 = "SELECT `event_id`, `event_header`, `event_description`, `publish_date`, `image` FROM `event`";
                            $this->createTB->value = $evnt1; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            
                        } else {
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            echo "No found";
                        }
                    }  
                    //132
                    public function btn132($mysqli, $btnval)
                    {

                            // Update query
                            $delete = "DELETE FROM `event` WHERE `event_id` = '$btnval'";
                            $this->createTB->value = $delete; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            return $this->createTB->executeqry();

                            

                    }                                   
            }

//classTB
class classTbCheck{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT `class_id`, `class_name`, `start_date_of_class`, `end_date_of_class` FROM `classTb`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}
            //class
            class creat_and_update_calss{

                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }

                public function createClassStr($mysqli, $class_name, $str_date2, $end_date2){
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `classTb`(`class_name`, `start_date_of_class`, `end_date_of_class`) VALUES ('$class_name', '$str_date2', '$end_date2')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                                   
                }
                //EditClassName
                public function EditClassName($mysqli, $class_name, $class_id){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "UPDATE `classTb` SET `class_name`='$class_name' /*,`start_date_of_class`='',`end_date_of_class`='' */ WHERE `class_id`='$class_id'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }      
                //EditClassStr_date
                public function EditClassStr_date($mysqli, $str_date2, $class_id){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "UPDATE `classTb` SET /*`class_name`='$class_name' ,*/ `start_date_of_class`='$str_date2' /*,`end_date_of_class`='' */ WHERE `class_id`='$class_id'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }     
                //EditClassEnd
                public function EditClassEnd($mysqli, $end_date2, $class_id){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "UPDATE `classTb` SET /*`class_name`='$class_name' , `start_date_of_class`='$str_date2' ,*/ `end_date_of_class`='$end_date2'  WHERE `class_id`='$class_id'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }     
                
                //Delete class
                public function deleteClass($mysqli, $class_id){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "DELETE FROM `classTb` WHERE `class_id` = '$class_id'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }                    

            }

//subjectTb
class sujectCheck{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT `subjetid`, `subject_name` FROM `subjetTb`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

            //subject
            class creat_and_update_subject{

                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }
                //create subject
                public function createsubject($mysqli, $subject_name){
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                            $insertQuery = "INSERT INTO `subjetTb`(`subject_name`) VALUES ('$subject_name')";
                            $this->createTB->value = $insertQuery; // Set the value property
                            $this->createTB->mysqli = $mysqli;
                            $this->createTB->executeqry();
                                   
                }
                //EditSubejctName
                public function EditSubjectName($mysqli, $Edit_subject_id,  $Edit_subject){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "UPDATE `subjetTb` SET `subject_name`='$Edit_subject' WHERE `subjetid`= '$Edit_subject_id'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }            
                
                //Delete class
                public function deleteSubject($mysqli, $sbid){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery = "DELETE FROM `subjetTb` WHERE `subjetid` = '$sbid'";
                    $this->createTB->value = $insertQuery; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }                    

            }           

//TeacherTb
class Teachersec{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT `empid`, `user_name`, `passwordsec`, `codeR` FROM `employ_teacher`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}


//TeacherTb
class TeachersecCheck{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select_check($mysqli, $passwordField, $teacher_name)
    {
        // Check if the record exists
        $sql_check = "SELECT `empid`, `user_name`, `passwordsec`, `codeR` FROM `employ_teacher` WHERE (`user_name` = '$teacher_name' AND `passwordsec` = SHA2('$passwordField', 256))";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

//TeacherTb1emp
class TeachersecEmp1{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_select_check($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT `empid`, `frist_name`, `last_name`, `address`, `contact_number`, `email`, `NIC`, `location_or_city`, `image` FROM `employ_detail1`";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

            /*
                >>> Teacher register section
            */
            class creat_and_update_Teacher{

                public $createTB;

                public function __construct()
                {
                    $this->createTB = new excu();
                }
                // >> create Teacher
                public function createTeacher($mysqli, $passwordField, $teacher_name){
                            // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                                    $teacherIdCH = new TeachersecCheck();
                                    $checkResult = $teacherIdCH->check_select_check($mysqli, $passwordField, $teacher_name);
                                if ($checkResult && $checkResult->num_rows > 0) {
                                        
                                }   
                                else{

                                    $insertQuery = "INSERT INTO `employ_teacher`(`user_name`, `passwordsec`) VALUES ('$teacher_name', SHA2('$passwordField', 256))";
                                    $this->createTB->value = $insertQuery; // Set the value property
                                    $this->createTB->mysqli = $mysqli;
                                    $this->createTB->executeqry();

                                    $checkResult2 = $teacherIdCH->check_select_check($mysqli, $passwordField, $teacher_name);
                                    $row2 = $checkResult2->fetch_assoc();

                                    // Access the data
                                    $epmidIn = $row2["empid"];
                                    $insertQuery2 = "INSERT INTO `employ_detail1`(`empid`) VALUES ('$epmidIn')";
                                    $insertQuery3 = "INSERT INTO `emp_detail2`(`empid`) VALUES ('$epmidIn')"; 

                                    $this->createTB->value = $insertQuery2; 
                                    $this->createTB->mysqli = $mysqli;
                                    $this->createTB->executeqry();    

                                    $this->createTB->value = $insertQuery3;   
                                    $this->createTB->mysqli = $mysqli;
                                    $this->createTB->executeqry();   

                                }            
                                   
                }         
                
                //Delete Teacher
                public function deleteTeacher($mysqli, $tech){
                    // $floatingTextarea = $this->floatingTextarea; // Uncomment if necessary
                    $insertQuery1 = "DELETE FROM `emp_detail2` WHERE `empid` = '$tech'";
                    $insertQuery2 = "DELETE FROM `employ_detail1` WHERE `empid` = '$tech'";
                    $insertQuery3 = "DELETE FROM `employ_teacher` WHERE `empid` = '$tech'";
                    $this->createTB->value = $insertQuery1;
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                    $this->createTB->value = $insertQuery2;
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                    $this->createTB->value = $insertQuery3;
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();
                           
                }
                                

            }  
            
//timeTB
class timeTbleTb{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_timeTbleTb($mysqli)
    {
        // Check if the record exists
        $sql_check = "SELECT
        `time_table`.`time_table_id` as `timeTbID`,
        `classTb`.`class_name` as `className`,
        `subjetTb`.`subject_name` as `subjectName`,
        `time_table`.`date_timeTable` as `Sheduldate`,
        `time_table`.`start_time` as `stTime`,
        `time_table`.`end_time` as `endTime`,
        `confirm_time_table`.`confirmation_session` as `crmSession`,
        `confirm_time_table`.`empid` as `cnfempid`,
        `confirm_time_table`.`transfer_session` as `transferSeeion`,
        `employ_detail1`.`frist_name` as `fristNameTime`,
        `employ_detail1`.`last_name` as `lastNameTime`,
        `employ_detail1`.`image` as `imageTime`,
        `time_table_session_transfer`.`confirmation_session` as `trtime`,
        `transferemp`.`frist_name` as `tra_frist_name`,
        `transferemp`.`last_name` as `tra_lastname`,
        `time_table_session_transfer`.`take_empid` as `tran_empid`,
        `time_table_session_transfer`.`confirmation_session` as `tran_cnf`,
        `transferemp`.`image` as `tra_image`
    FROM
        `time_table`
    JOIN `classTb` ON `time_table`.`class_id` = `classTb`.`class_id`
    JOIN `subjetTb` ON `time_table`.`subject_id` = `subjetTb`.`subjetid`
    JOIN `confirm_time_table` ON `time_table`.`time_table_id` = `confirm_time_table`.`time_table_id`
    JOIN `employ_detail1` ON `confirm_time_table`.`empid` = `employ_detail1`.`empid`
    LEFT JOIN `time_table_session_transfer` ON `time_table`.`time_table_id` = `time_table_session_transfer`.`time_table_id`
    LEFT JOIN `employ_detail1` as `transferemp` ON `time_table_session_transfer`.`take_empid` = `transferemp`.`empid`";
    
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}

//timeTB with session
class timeTbleTb_teacherOnly{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }
    
    public function check_timeTbleTb($mysqli, $ssin)
    {
        // Check if the record exists
        $sql_check = "SELECT
        `time_table`.`time_table_id` as `timeTbID`,
        `classTb`.`class_name` as `className`,
        `subjetTb`.`subject_name` as `subjectName`,
        `time_table`.`date_timeTable` as `Sheduldate`,
        `time_table`.`start_time` as `stTime`,
        `time_table`.`end_time` as `endTime`,
        `confirm_time_table`.`confirmation_session` as `crmSession`,
        `confirm_time_table`.`empid` as `cnfempid`,
        `confirm_time_table`.`transfer_session` as `transferSeeion`,
        `employ_detail1`.`frist_name` as `fristNameTime`,
        `employ_detail1`.`last_name` as `lastNameTime`,
        `employ_detail1`.`image` as `imageTime`,
        `time_table_session_transfer`.`confirmation_session` as `trtime`,
        `transferemp`.`frist_name` as `tra_frist_name`,
        `transferemp`.`last_name` as `tra_lastname`,
        `time_table_session_transfer`.`take_empid` as `tran_empid`,
        `time_table_session_transfer`.`confirmation_session` as `tran_cnf`,
        `transferemp`.`image` as `tra_image`,
        `traveling_allovanceTB`.`pay_tvel_allovance` as `trav_allvance`
    FROM
        `time_table`
    JOIN `classTb` ON `time_table`.`class_id` = `classTb`.`class_id`
    JOIN `subjetTb` ON `time_table`.`subject_id` = `subjetTb`.`subjetid`
    JOIN `confirm_time_table` ON `time_table`.`time_table_id` = `confirm_time_table`.`time_table_id`
    JOIN `employ_detail1` ON `confirm_time_table`.`empid` = `employ_detail1`.`empid`
    LEFT JOIN `time_table_session_transfer` ON `time_table`.`time_table_id` = `time_table_session_transfer`.`time_table_id`
    LEFT JOIN `employ_detail1` as `transferemp` ON `time_table_session_transfer`.`take_empid` = `transferemp`.`empid` LEFT JOIN `traveling_allovanceTB` ON `time_table`.`trvid` = `traveling_allovanceTB`.`trv_id`  WHERE `confirm_time_table`.`empid` = '$ssin' OR `time_table_session_transfer`.`take_empid` = '$ssin'";
    
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}




//timeTble
class CheckTimetbl{
    public $createTB;

    public function __construct()
    {
        $this->createTB = new excu();
    }

    public function timeTbleTb1($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName)
    {
        // Check if the record exists
        $sql_check = "SELECT `time_table`.`time_table_id` as `timetbid`, `confirm_time_table`.`empid` as `byempid` FROM `time_table` JOIN `confirm_time_table` ON `time_table`.`time_table_id` = `confirm_time_table`.`time_table_id` WHERE  `time_table`.`class_id` = '$classfrmid' AND `time_table`.`subject_id` = '$subjectName' AND `time_table`.`date_timeTable` = '$titile_datetime2' AND `time_table`.`start_time` = '$starttime' AND `time_table`.`end_time` = '$endtime' AND `confirm_time_table`.`empid` = '$TeacherName'";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function timeTbleTb2($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName)
    {
        // Check if the record exists
        $sql_check = "SELECT `time_table_id`, `class_id`, `subject_id`, `date_timeTable`, `start_time`, `end_time` FROM `time_table` WHERE `class_id`= '$classfrmid' AND  `subject_id` = '$subjectName' AND `date_timeTable` = '$titile_datetime2' AND `start_time` = '$starttime' AND `end_time` = '$endtime'";
        $this->createTB->value = $sql_check; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

}

                //timeTble
                class insertTimetbl{
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }
                    //148_1
                    public function timeTbleTb($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName, $Select_transport)
                    {
                        $timtb = new CheckTimetbl();
                        $result = $timtb->timeTbleTb1($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName);
                        if ($result && $result->num_rows > 0) {  
                            
                        }
                        else{
                        // Check if the record exists
                        $sql_check = "INSERT INTO `time_table`(`class_id`,`subject_id`, `date_timeTable`, `start_time`, `end_time`, `trvid`) VALUES ('$classfrmid', '$subjectName', '$titile_datetime2', '$starttime', '$endtime', '$Select_transport')";
                        $this->createTB->value = $sql_check; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();

                        //$timtb = new CheckTimetbl();
                        $result5 = $timtb->timeTbleTb2($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName);
                        $row3 = $result5->fetch_assoc();
                        //$epmidIn = $row2['byempid'];  
                        $timetbid = $row3['time_table_id'];  

                        // Check if the record exists
                        $sql_check2 = "INSERT INTO `confirm_time_table`(`time_table_id`, `empid`) VALUES ('$timetbid', '$TeacherName')";
                        $this->createTB->value = $sql_check2; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                        

                    }
                    }
                    //148_2
                    public function timeTbleTb2($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName)
                    {
                        $timtb = new CheckTimetbl();
                        $result = $timtb->timeTbleTb1($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName);
                        if ($result && $result->num_rows > 0) {  
                            
                        }
                        else{
                        // Check if the record exists
                        $sql_check = "INSERT INTO `time_table`(`class_id`,`subject_id`, `date_timeTable`, `start_time`, `end_time`) VALUES ('$classfrmid', '$subjectName', '$titile_datetime2', '$starttime', '$endtime')";
                        $this->createTB->value = $sql_check; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();

                        //$timtb = new CheckTimetbl();
                        $result5 = $timtb->timeTbleTb2($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName);
                        $row3 = $result5->fetch_assoc();
                        //$epmidIn = $row2['byempid'];  
                        $timetbid = $row3['time_table_id'];  

                        // Check if the record exists
                        $sql_check2 = "INSERT INTO `confirm_time_table`(`time_table_id`, `empid`) VALUES ('$timetbid', '$TeacherName')";
                        $this->createTB->value = $sql_check2; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                        

                    }
                    }                    

                    public function timeTbleTbDelete($mysqli, $id)
                    {
                                                // Check if the record exists
                        $sql_check1 = "DELETE FROM `confirm_time_table` WHERE `time_table_id` = '$id'";
                        $this->createTB->value = $sql_check1; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();

                                                // Check if the record exists
                        $sql_check2 = "DELETE FROM `time_table` WHERE `time_table_id` = '$id'";
                        $this->createTB->value = $sql_check2; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();
                    }

                }

/*
//TODO MonthSalarySub
*/                
class checkAndSelectMonthSalarySub{
    public $createTB;
    public function __construct(){
        $this->createTB = new excu();
    }

    public function Msub_check_salary_select($mysqli, $scheds3){
    date_default_timezone_set('Asia/Colombo');
    $todaydate = date('Y-m-d');
    $yearMonth = date('Y-m', strtotime($todaydate));

        $sql_check2 = "SELECT 
            `monthly_salary_sub_id`, 
            `Msub_empid`, 
            `Msub_date`, 
            `Msub_day_salary_gen_last_id`, 
            `Msub_day_salary_Total_schedule`, 
            `Msub_slry_bonus_last_id`, 
            `Msub_slry_bonus_Total`, 
            `Msub_transport_last_id`, 
            `Msub_transport_last_Totals`, 
            `Msub_event_last_id`, 
            `Msub_event_last_Total`, 
            `Msub_loan_last_id`, 
            `Msub_loan_last_Total`, 
            `Msub_confirm` 
        FROM 
            `monthlySubtotal` 
        WHERE 
            `Msub_empid` = '$scheds3' 
            AND YEAR(`Msub_date`) = YEAR('$todaydate') 
            AND MONTH(`Msub_date`) = MONTH('$todaydate')";

        $this->createTB->value = $sql_check2; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
    public function Plus_Allowance_Condition($mysqli, $lastTotalMonth){
        // echo $lastTotalMonth;
        $sql_check2 = "SELECT `allowance_price` FROM `monthly_salary_allowance_range` WHERE '$lastTotalMonth' BETWEEN `start_salary_range` AND `end_salary_range`";
        $this->createTB->value = $sql_check2; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
       
    }
}  
//////////////////////////////////////
class genarateMonthlySub{
    public $createTB;
    public $Check_M_sub_sal;
    public $yearMonth;
    public $todaydate;
    public $gotSesion;
    public function __construct(){
        $this->createTB = new excu();
        $this->Check_M_sub_sal = new checkAndSelectMonthSalarySub();
            date_default_timezone_set('Asia/Colombo');
            $this->todaydate = date('Y-m-d');
            $this->yearMonth = date('Y-m', strtotime($this->todaydate));
    }
    //for time table (insert day salary of time shedule and transport slary use this function )
    public function genarateMonthlySub_IN_and_UP_1($mysqli, $scheds3, $totalSalry, $pay_tvel_allovance){
        $result180 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3);
       
         if ($result180 && $result180->num_rows > 0) {
                //Up
                try {
                    //code...
                  $this->gotSesion = $scheds3;
                $result181 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_day_salary_Total_schedule"];
                $pluseTotalDaySal =  $result181 + $totalSalry;
               // $result182 = $this->Check_M_sub_sal->Plus_Allowance_Condition($mysqli, $scheds3)->fetch_assoc()["allowance_price"];
               $result182 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_transport_last_Totals"]; 
               $pluseTransport = $result182 + $pay_tvel_allovance;
 
                $MBSUB = "UPDATE `monthlySubtotal` SET `Msub_day_salary_Total_schedule` = '$pluseTotalDaySal', `Msub_transport_last_Totals` = '$pluseTransport'  WHERE `Msub_empid` = '$scheds3' AND  YEAR(`Msub_date`) = YEAR('$this->todaydate') AND MONTH(`Msub_date`) = MONTH('$this->todaydate')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();  
                  
                //update monthly last total
                $result183 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_day_salary_Total_schedule"];
                $result184 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_transport_last_Totals"];
                $result185 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_event_last_Total"];
                $result186 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_loan_last_Total"];
                    

                     $lastTotalMonth = (($result183 + $result184 + $result185) - $result186);
                    //get the bounus salry
                   $this->LastMontlyTotal_UP1($mysqli, $scheds3, $lastTotalMonth);

                   if($lastTotalMonth > 20000){
                    $result187 = 3000.00;
                     $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }
                   else{
                    $result187 = $this->Check_M_sub_sal->Plus_Allowance_Condition($mysqli, $lastTotalMonth)->fetch_assoc()["allowance_price"];
                    //update Montly last Total
                    
                    $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }
                     


                     } catch (Exception $e) {
                    //throw $th;
                }
         }
         else{
             try {
                    //code...
                //In
                $MBSUB = "INSERT INTO `monthlySubtotal`(`Msub_empid`, `Msub_date`, `Msub_day_salary_Total_schedule`, `Msub_transport_last_Totals`) VALUES ('$scheds3', '$this->todaydate' , '$totalSalry', '$pay_tvel_allovance')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();  
                
                $paytrvWithSalary = $totalSalry + $pay_tvel_allovance;
                 //Insert Montly last Total
                    $this->LastMontlyTotal_IN($mysqli, $scheds3, $paytrvWithSalary);

                   } catch (Exception $e) {
                    //throw $th;
                }
         }
         
    }
    //loan section Monthly
    public function genarateMonthlySub_In_Up_2($mysqli, $id, $Teachid, $loanprice){
         $scheds3 = $Teachid;
         $result180 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3);
                  if ($result180 && $result180->num_rows > 0) {
                //Up
                try {
                $result181 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_loan_last_Total"];
                $loanPluse =  $result181 + $loanprice;
               
                $MBSUB = "UPDATE `monthlySubtotal` SET `Msub_loan_last_Total` = '$loanPluse' WHERE `Msub_empid` = '$scheds3' AND  YEAR(`Msub_date`) = YEAR('$this->todaydate') AND MONTH(`Msub_date`) = MONTH('$this->todaydate')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();  

                                //update monthly last total
                $result183 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_day_salary_Total_schedule"];
                $result184 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_transport_last_Totals"];
                $result185 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_event_last_Total"];
                $result186 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_loan_last_Total"];
                
                    $lastTotalMonth = ($result183 + $result184 + $result185) - $result186;
                    //get the bounus salry
                   $this->LastMontlyTotal_UP1($mysqli, $scheds3, $lastTotalMonth);

                   if($lastTotalMonth > 20000){
                    $result187 = "3000.00";
                     $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }
                   else{
                    $result187 = $this->Check_M_sub_sal->Plus_Allowance_Condition($mysqli, $lastTotalMonth)->fetch_assoc()["allowance_price"];
                    //update Montly last Total
                    
                    $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }

                     } catch (Exception $e) {
                    //throw $th;
                }
         }
         else{
             try {
                $MBSUB = "INSERT INTO `monthlySubtotal`(`Msub_empid`, `Msub_date`, `Msub_loan_last_Total`) VALUES ('$scheds3', '$this->todaydate' , '$loanprice')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();      
                
                //$paytrvWithSalary = $totalSalry + $pay_tvel_allovance;
                 //Insert Montly last Total
                    $this->LastMontlyTotal_IN2($mysqli, $scheds3, $loanprice);

                   } catch (Exception $e) {
                    //throw $th;
                }
         }
    }    
    //allowance section monthly
    public function genarateMonthlySub_In_Up_3($mysqli, $id, $Teachid, $allowance){
         $scheds3 = $Teachid;
         $result180 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3);
                  if ($result180 && $result180->num_rows > 0) {
                //Up
                try {
                $result181 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_event_last_Total"];
                $allowPluse =  $result181 + $allowance;
               
                $MBSUB = "UPDATE `monthlySubtotal` SET `Msub_event_last_Total` = '$allowPluse' WHERE `Msub_empid` = '$scheds3' AND  YEAR(`Msub_date`) = YEAR('$this->todaydate') AND MONTH(`Msub_date`) = MONTH('$this->todaydate')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();  

                                //update monthly last total
                $result183 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_day_salary_Total_schedule"];
                $result184 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_transport_last_Totals"];
                $result185 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_event_last_Total"];
                $result186 = $this->Check_M_sub_sal->Msub_check_salary_select($mysqli, $scheds3)->fetch_assoc()["Msub_loan_last_Total"];
                
                    $lastTotalMonth = ($result183 + $result184 + $result185) - $result186;
                    //get the bounus salry
                   $this->LastMontlyTotal_UP1($mysqli, $scheds3, $lastTotalMonth);

                   if($lastTotalMonth > 20000){
                    $result187 = "3000.00";
                     $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }
                   else{
                    $result187 = $this->Check_M_sub_sal->Plus_Allowance_Condition($mysqli, $lastTotalMonth)->fetch_assoc()["allowance_price"];
                    //update Montly last Total
                    
                    $this->LastMontlyTotal_UP2($mysqli, $scheds3, $result187);
                   }

                     } catch (Exception $e) {
                    //throw $th;
                }
         }
         else{
             try {
                $MBSUB = "INSERT INTO `monthlySubtotal`(`Msub_empid`, `Msub_date`, `Msub_event_last_Total`) VALUES ('$scheds3', '$this->todaydate' , '$allowance')";
                $this->createTB->value = $MBSUB; // Set the value property
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();   

                $this->LastMontlyTotal_IN3($mysqli, $scheds3, $allowance);                   
                   } catch (Exception $e) {
                    //throw $th;
                }
         }
    }  
    
    private function LastMontlyTotal_UP1($mysqli, $scheds3, $lastTotalMonth){
        // echo "<br/>". $scheds3;
        //  echo "<br/>". $lastTotalMonth;
        //   echo "<br/>". $result187;

                    $MBSUB2 = "UPDATE `monthlyLastTotal` SET `Mnet_salary` = '$lastTotalMonth' WHERE `Mlst_empid` = '$scheds3' AND  YEAR(`Mlst_date`) = YEAR('$this->todaydate') AND MONTH(`Mlst_date`) = MONTH('$this->todaydate')";
                    $this->createTB->value = $MBSUB2; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();  
    }
    private function LastMontlyTotal_UP2($mysqli, $scheds3, $result187){
        // echo "<br/>". $scheds3;
        //  echo "<br/>". $lastTotalMonth;
        //   echo "<br/>". $result187;

                    $MBSUB2 = "UPDATE `monthlyLastTotal` SET  `Mbonus` = '$result187' WHERE `Mlst_empid` = '$scheds3' AND  YEAR(`Mlst_date`) = YEAR('$this->todaydate') AND MONTH(`Mlst_date`) = MONTH('$this->todaydate')";
                    $this->createTB->value = $MBSUB2; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();  
    }    
    private function LastMontlyTotal_IN($mysqli, $scheds3, $paytrvWithSalary){
                    $MBSUB2 = "INSERT INTO `monthlyLastTotal`(`Mlst_empid`, `Mlst_date`, `Mnet_salary`) VALUES ('$scheds3', '$this->todaydate', '$paytrvWithSalary')";
                    $this->createTB->value = $MBSUB2; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();  
    }
    private function LastMontlyTotal_IN2($mysqli, $scheds3, $loanprice){
                    $MBSUB2 = "INSERT INTO `monthlyLastTotal`(`Mlst_empid`, `Mlst_date`, `Mnet_salary`) VALUES ('$scheds3', '$this->todaydate', '$loanprice')";
                    $this->createTB->value = $MBSUB2; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();  
    }
    private function LastMontlyTotal_IN3($mysqli, $scheds3, $allowance){
                    $MBSUB2 = "INSERT INTO `monthlyLastTotal`(`Mlst_empid`, `Mlst_date`, `Mnet_salary`) VALUES ('$scheds3', '$this->todaydate', '$allowance')";
                    $this->createTB->value = $MBSUB2; // Set the value property
                    $this->createTB->mysqli = $mysqli;
                    $this->createTB->executeqry();  
    }        

}
/////////////////////////////////////////////////////////////////////////////
class ChecktimeTblTecher {
    public $createTB;

    public function __construct() {
         $this->createTB = new excu();
    }   

    public function checkTeacherTime($mysqli, $getid, $scheds3) {
        $sql_check = "SELECT * FROM `confirm_time_table` WHERE `time_table_id` = '$getid' AND `empid` = '$scheds3'";
        $this->createTB->value = $sql_check;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function checkTeacherTime2($mysqli, $getid, $scheds3) {
        $sql_check2 = "SELECT * FROM `time_table_session_transfer` WHERE `time_table_id` = '$getid' AND `take_empid` = '$scheds3'";
        $this->createTB->value = $sql_check2;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function mayKeepTmtblTeacher($mysqli, $tblid, $getemid) {
        $sql_check2 = "SELECT * FROM `time_table_session_transfer` WHERE `time_table_id` = '$tblid' AND `take_empid` = '$getemid'";
        $this->createTB->value = $sql_check2;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function onlyTimeId_Teacher($mysqli, $tblid) {
        $sql_check = "SELECT `empid` FROM `confirm_time_table` WHERE `time_table_id` = '$tblid'";
        $this->createTB->value = $sql_check;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function getTimetbleDate($mysqli, $getid) {
        $sql_check = "SELECT `time_table`.`time_table_id` as `time_table_id`, `time_table`.`class_id` as `class_id`, `time_table`.`subject_id` as `subject_id`, `time_table`.`date_timeTable` as `date_timeTable`, `time_table`.`start_time` as `start_time`, `time_table`.`end_time` as `end_time`, `traveling_allovanceTB`.`pay_tvel_allovance` as `pay_tvel_allovance` FROM `time_table` LEFT JOIN `traveling_allovanceTB` ON `time_table`.`trvid` = `traveling_allovanceTB`.`trv_id` WHERE `time_table`.`time_table_id` = '$getid'";
        $this->createTB->value = $sql_check;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }

    public function getDayInfoRedate($mysqli, $scheds3) {
        $sql_check = "SELECT `DSlGen_detail_id`, `empid`, `description`, `published_date`, `salary_base`, `published_sessionID` FROM `day_salary_gen_details` WHERE `empid` = '$scheds3' ORDER BY `published_date` DESC LIMIT 1 ";
        $this->createTB->value = $sql_check;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }
}



//TODO fincila and session confrirm section


class teacher_Timetbl {
    public $createTB;
    public $Msub;
    public function __construct() {
        $this->createTB = new excu();
        $this->Msub = new genarateMonthlySub();
    }
/*
TODO: now i want to modify this section adda the travel code
*/
    public function teacher_Timetbl_crmf($mysqli, $getid, $scheds3) {
        $checktimeTblTecher = new ChecktimeTblTecher($this->createTB);
        $result14 = $checktimeTblTecher->checkTeacherTime($mysqli, $getid, $scheds3);
        /*
        !own confirm session for slary create
        */
        if ($result14 && $result14->num_rows > 0) {
            try {
                // add the confirmed for confrim_time_table
                $sql_check3 = "UPDATE `confirm_time_table` SET `confirmation_session` = '1' WHERE `time_table_id` = '$getid' AND `empid` = '$scheds3'";
                $this->createTB->value = $sql_check3;
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();
                
                //get the date from timetable
                $dateTimeObject = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["date_timeTable"];
                $convert_timeTableDate = date("Y-m", strtotime($dateTimeObject)); // Use the correct format for 'Y-m'
                $timetbl_date3 = $convert_timeTableDate;

                //get publish data from day_salary_gen_details 
                $dateTimeObject2 = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3)->fetch_assoc()["published_date"];
                $convert_timeTableDate2 = date("Y-m", strtotime($dateTimeObject2)); // Use the correct format for 'Y-m'
                $slry_infor_date3 = $convert_timeTableDate2;

                

                // Condition and insert (Condition of check the which date select for generate the salary (time table sheduled date with publiched_date of day_salary_gen_details))
               //example for : imagine shheduled date 2023/12/1 but if have new condtion for this month. because of salary generate for use before condition
                if ($timetbl_date3 > $slry_infor_date3) {

                    //this condition process of select the last second value
                    $salaryBase = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3, 2)->fetch_assoc()["salary_base"];
                    $checkre = $this->generateSalary($mysqli, $getid, $scheds3, $timetbl_date3,  $salaryBase);
                }
                else{

                   // this condtion use select the last value
                    $salaryBase = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3, 1)->fetch_assoc()["salary_base"];
                    $this->generateSalary($mysqli, $getid, $scheds3, $timetbl_date3,  $salaryBase);                    
                }

            } catch (Exception $e) {
                // Handle exceptions appropriately
                echo $e;
            }
        }
            /*
            !transfer seeion for salry
            */
        $result15 = $checktimeTblTecher->checkTeacherTime2($mysqli, $getid, $scheds3);
        if ($result15 && $result15->num_rows > 0) {
            try{
            
            //Add the confirmed for time_table_session_transfer
            $sql_check3 = "UPDATE `time_table_session_transfer` SET `confirmation_session` = '1' WHERE `time_table_id` = '$getid' AND `take_empid` = '$scheds3'";
            $this->createTB->value = $sql_check3; // Set the value property
            $this->createTB->mysqli = $mysqli;
            $this->createTB->executeqry();   

                //get the date from timetable
                $dateTimeObject = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["date_timeTable"];
                $convert_timeTableDate = date("Y-m", strtotime($dateTimeObject)); // Use the correct format for 'Y-m'
                $timetbl_date3 = $convert_timeTableDate;

                //get publish data from day_salary_gen_details 
                $dateTimeObject2 = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3)->fetch_assoc()["published_date"];
                $convert_timeTableDate2 = date("Y-m", strtotime($dateTimeObject2)); // Use the correct format for 'Y-m'
                $slry_infor_date3 = $convert_timeTableDate2;



               // Condition and insert (Condition of check the which date select for generate the salary (time table sheduled date with publiched_date of day_salary_gen_details))
               //example for : imagine shheduled date 2023/12/1 but if have new condtion for this month. because of salary generate for use before conditions
                if ($timetbl_date3 > $slry_infor_date3) {

                     //this condition process of select the last second value --2
                    $salaryBase = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3)->fetch_assoc()["salary_base"];
                    $checkre = $this->generateSalary($mysqli, $getid, $scheds3, $timetbl_date3,  $salaryBase);
                 
                }
                else{
                   // this condtion use select the last value --1
                    $salaryBase = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3)->fetch_assoc()["salary_base"];
                    $this->generateSalary($mysqli, $getid, $scheds3, $timetbl_date3,  $salaryBase);                    
                }

            } catch (Exception $e) {
                // Handle exceptions appropriately
                 echo $e;
            }
        }
    }

    private function generateSalary($mysqli, $getid, $scheds3, $timetbl_date3,  $salaryBase) {

        //TODO Now I come again

        $checktimeTblTecher = new ChecktimeTblTecher($this->createTB);

        //get the start time from time_table table
        $startDatetime = new DateTime($checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["start_time"]);
        
        //get the end time from time table
        $endDatetime = new DateTime($checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["end_time"]);
        
        //get the day DSlGen_detail_id from day_salary_gen_details -- 2
        $daaysalryConditionID = $checktimeTblTecher->getDayInfoRedate($mysqli, $scheds3)->fetch_assoc()["DSlGen_detail_id"];

        //get the pay_transport from time table
        
        if(mysqli_num_rows($checktimeTblTecher->getTimetbleDate($mysqli, $getid)) > 0){

                $payement_allavance = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["pay_tvel_allovance"];


                $interval = $startDatetime->diff($endDatetime);

                // Calculate total hours in minutes
                $totalMinutes = $interval->days * 24 * 60;
                $totalMinutes += $interval->h * 60;
                $totalMinutes += $interval->i;

                // Convert total minutes to hours:minutes format '%02d:%02d'
                $hourTotal = sprintf('%02d.%02d', ($totalMinutes / 60), $totalMinutes % 60);

                // Calculate total salary
                //echo $salaryBase * $hourTotal;
                 $totalSalry = $salaryBase * $hourTotal;
                //echo $scheds3;
                if($payement_allavance == 0 || $payement_allavance == null){

                    $payement_allavance = 0;
                $qryIntomysql = "INSERT INTO `day_salary_gen`(`empid`, `DSlGen_detail_id`, `time_table_id`, `date_generated`, `calculate_hour`, `total_salary_day`, `trv_gen`) VALUES ('$scheds3', '$daaysalryConditionID', '$getid', CURRENT_DATE, '$hourTotal', '$totalSalry', '$payement_allavance')";
                $this->createTB->value = $qryIntomysql;
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();
                /*
                ? month salary generate
                */
                //$pay_tvel_allovance = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["pay_tvel_allovance"];
                $pay_tvel_allovance = 0;
                $this->Msub->genarateMonthlySub_IN_and_UP_1($mysqli, $scheds3, $totalSalry, $pay_tvel_allovance);

                }
                else{

                $qryIntomysql = "INSERT INTO `day_salary_gen`(`empid`, `DSlGen_detail_id`, `time_table_id`, `date_generated`, `calculate_hour`, `total_salary_day`, `trv_gen`) VALUES ('$scheds3', '$daaysalryConditionID', '$getid', CURRENT_DATE, '$hourTotal', '$totalSalry', '$payement_allavance')";
                $this->createTB->value = $qryIntomysql;
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();
                /*
                ? month salary generate
                */
                $pay_tvel_allovance = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["pay_tvel_allovance"];
                //$pay_tvel_allovance = 0;
                $this->Msub->genarateMonthlySub_IN_and_UP_1($mysqli, $scheds3, $totalSalry, $pay_tvel_allovance);

                }

        }
        //if transport null
        else{
                $payement_allavance = 0;

            
                $interval = $startDatetime->diff($endDatetime);

                // Calculate total hours in minutes
                $totalMinutes = $interval->days * 24 * 60;
                $totalMinutes += $interval->h * 60;
                $totalMinutes += $interval->i;

                // Convert total minutes to hours:minutes format '%02d:%02d'
                $hourTotal = sprintf('%02d.%02d', ($totalMinutes / 60), $totalMinutes % 60);

                // Calculate total salary
                //echo $salaryBase * $hourTotal;
               echo  $totalSalry = $salaryBase * $hourTotal;
                //echo $scheds3;
                if($payement_allavance == 0 || $payement_allavance == null){

                    $payement_allavance = 0;
                $qryIntomysql = "INSERT INTO `day_salary_gen`(`empid`, `DSlGen_detail_id`, `time_table_id`, `date_generated`, `calculate_hour`, `total_salary_day`, `trv_gen`) VALUES ('$scheds3', '$daaysalryConditionID', '$getid', CURRENT_DATE, '$hourTotal', '$totalSalry', '$payement_allavance')";
                $this->createTB->value = $qryIntomysql;
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();
                /*
                ? month salary generate
                */
                //$pay_tvel_allovance = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["pay_tvel_allovance"];
                $pay_tvel_allovance = 0;
                $this->Msub->genarateMonthlySub_IN_and_UP_1($mysqli, $scheds3, $totalSalry, $pay_tvel_allovance);

                }
                else{

                $qryIntomysql = "INSERT INTO `day_salary_gen`(`empid`, `DSlGen_detail_id`, `time_table_id`, `date_generated`, `calculate_hour`, `total_salary_day`, `trv_gen`) VALUES ('$scheds3', '$daaysalryConditionID', '$getid', CURRENT_DATE, '$hourTotal', '$totalSalry', '$payement_allavance')";
                $this->createTB->value = $qryIntomysql;
                $this->createTB->mysqli = $mysqli;
                $this->createTB->executeqry();
                /*
                ? month salary generate
                */
                $pay_tvel_allovance = $checktimeTblTecher->getTimetbleDate($mysqli, $getid)->fetch_assoc()["pay_tvel_allovance"];
                //$pay_tvel_allovance = 0;
                $this->Msub->genarateMonthlySub_IN_and_UP_1($mysqli, $scheds3, $totalSalry, $pay_tvel_allovance);

                }
        }
        
       

    
    }
/*
///////////////////////////[problem end//////////////////////////////////
*/

                        //153
                    public function teacher_Timetbl_tran($mysqli, $tblid, $TeacherName, $getemid){
                       
                        $checktimeTbl_techer = new ChecktimeTblTecher();
                        $result16 = $checktimeTbl_techer->mayKeepTmtblTeacher($mysqli, $tblid, $getemid);

                        if ($result16 && $result16->num_rows > 0) {
                        $sql_check2 = "UPDATE `time_table_session_transfer` SET `take_empid` = '$TeacherName' WHERE `time_table_id` = '$tblid' AND `take_empid` = '$getemid'";
                        $this->createTB->value = $sql_check2; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry(); 

                        //$checktimeTbl_techer = new checktimeTbl_techer();
                        $result17 = $checktimeTbl_techer->onlyTimeId_Teacher($mysqli, $tblid);

                        $row17 = $result17->fetch_assoc();

                        // Access the data
                        $epmidIn = $row17["empid"];  

                        if($TeacherName == $epmidIn){
                        $sql_check20 = "UPDATE `confirm_time_table` SET `transfer_session` = '0' WHERE `time_table_id` = '$tblid'";
                        $this->createTB->value = $sql_check20; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                         $this->createTB->executeqry();                                    
                        }
                        }
                        else{
                        $sql_check3 = "UPDATE `confirm_time_table` SET `transfer_session`= '1' WHERE `time_table_id` = '$tblid' AND `empid` = '$getemid'";
                        $this->createTB->value = $sql_check3; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry(); 

                        $sql_check4 = "INSERT INTO `time_table_session_transfer`(`time_table_id`, `take_empid`) VALUES ('$tblid', '$TeacherName')";
                        $this->createTB->value = $sql_check4; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   

  

                        }

                    }
}

////////////////////////////////////////////////////////////////////
//add teacher details
class addTeacher_details{

                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }

                    
    //btn154_0
    public function btn154_0($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `frist_name`='$datagetarray' /*,`last_name`='',`address`='',`contact_number`='',`email`='',`NIC`='',`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }
        //btn154_1
    public function btn154_1($mysqli, $sessionID, $datagetarray){
        if($datagetarray  != ""){
        $qryST = "UPDATE `employ_detail1` SET `last_name`='$datagetarray' /*,`address`='',`contact_number`='',`email`='',`NIC`='',`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }
        //btn154_2    
    public function btn154_2($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `address`='$datagetarray' /*,`contact_number`='',`email`='',`NIC`='',`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }    
        //btn154_3    
    public function btn154_3($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `contact_number`='$datagetarray' /*,`email`='',`NIC`='',`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }   
        //btn154_4    
    public function btn154_4($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `email`='$datagetarray' /*,`NIC`='',`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }      
        //btn154_5
    public function btn154_5($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `NIC`='$datagetarray' /*,`image`=''*/ WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }   
        //btn154_6
    public function btn154_6($mysqli, $sessionID, $datagetarray){
        if($datagetarray != ""){
        $qryST = "UPDATE `employ_detail1` SET `image`='$datagetarray' WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();   
        }
    }
    
    //teachers data show
    public function appaer_teachers_data($mysqli, $sessionID){
                $qryST = "SELECT `empid`, `frist_name`, `last_name`, `address`, `contact_number`, `email`, `NIC`, `image` FROM `employ_detail1` WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryST; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();   
    }
       
}

// 156
class teachPasss_change{
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }   
                    public function changeThePaas($mysqli, $sessionID, $usrpass){
                        $qryUP = "UPDATE `employ_teacher` SET `passwordsec`=SHA2('$usrpass', 256) WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryUP; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        $this->createTB->executeqry();                          

                    }
                    // 157   taechers
                    public function changed_data_show($mysqli, $sessionID){
                        $qryUP = "SELECT `user_name` FROM `employ_teacher` WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryUP; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }
                    // 157_2 supper user
                    public function changed_data_showsupperuser($mysqli, $sessionID){
                        $qryUP = "SELECT `empid`, `user_name`, `passwordsec`, `email`, `Imgsppusr`, `Code` FROM `super_user` WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryUP; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }
                    // 157_3   adm
                    public function changed_data_showadm($mysqli, $sessionID){
                        $qryUP = "SELECT `empid`, `codeR`, `username`, `email`, `passwordsec` FROM `adm` WHERE `empid` = '$sessionID'";
                        $this->createTB->value = $qryUP; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }                                        
}
//teacher detail salary
class Tech_salary_gen_detail_day{
                    public $createTB;

                    public function __construct()
                    {
                        $this->createTB = new excu();
                    }   
                    public function All_select($mysqli){
                        $qryslct = "SELECT 
    `day_salary_gen_details`.`DSlGen_detail_id` AS `DSlGen_detail_id`,
    `day_salary_gen_details`.`description` AS `description`,
    `day_salary_gen_details`.`published_date` AS `published_date`,
    `day_salary_gen_details`.`salary_base` AS `salary_base`,
    `day_salary_gen_details`.`published_sessionID` AS `published_sessionID`,
    `employ_detail1`.`frist_name` AS `frist_name`,
    `employ_detail1`.`last_name` AS `last_name` 
FROM 
    `day_salary_gen_details` 
JOIN 
    `employ_detail1` USING (`empid`)
HAVING
    `day_salary_gen_details`.`published_date`
ORDER BY 
    `day_salary_gen_details`.`published_date`";

                        $this->createTB->value = $qryslct; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }
                     //teacher salary add condition 158
                    public function Techsal_158_1($mysqli, $sessionID, $formysqlDate, $TeacherName, $Salary, $desc){
                        $qryIn = "INSERT INTO `day_salary_gen_details`(`empid`, `description`, `published_date`, `salary_base`, `published_sessionID`) VALUES ('$TeacherName', '$desc', '$formysqlDate', '$Salary', '$sessionID')";
                        $this->createTB->value = $qryIn; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }

                        //160 Teacher salary info
                    public function Info_delete($mysqli, $inforid){
                        $qrydl = "DELETE FROM `day_salary_gen_details` WHERE `DSlGen_detail_id` = '$inforid'";
                        $this->createTB->value = $qrydl; // Set the value property
                        $this->createTB->mysqli = $mysqli;
                        return $this->createTB->executeqry();                          

                    }
}

/*
! Traveling information 
*/
class tveling{

public $createTB;

public function  __construct(){
    $this->createTB = new excu();
}
/*
!161
*/
public function select_trvl_infor_tb($mysqli){
$trvinfor = "SELECT `trv_infor_id`, `code`, `Description` FROM `travel_al_infor`";
$this->createTB->value = $trvinfor; // Set the value property
$this->createTB->mysqli = $mysqli;
return $this->createTB->executeqry();  
}
/*
!162
*/
public function insert_travel_infor($mysqli, $travelCode, $description){
$travel_inforIN = "INSERT INTO `travel_al_infor`(`code`, `Description`) VALUES ('$travelCode','$description')";
$this->createTB->value = $travel_inforIN;
$this->createTB->mysqli= $mysqli;
return $this->createTB->executeqry();
}
public function select_only_travel_infor(){

}
//167
public function insert_only_travel_allvance($mysqli, $trav_codeall, $trv_date2, $paymentTrv){
$travel_inforIN = "INSERT INTO `traveling_allovanceTB`(`trv_infor_id`, `published_date`, `pay_tvel_allovance`) VALUES ('$trav_codeall', '$trv_date2', '$paymentTrv')";
$this->createTB->value = $travel_inforIN;
$this->createTB->mysqli= $mysqli;
$this->createTB->executeqry();
}
public function select_only_travel_infor_alovance(){

}
public function select_join_qry($mysqli){
$travel_joinSEL = "SELECT `traveling_allovanceTB`.`trv_id` as `trv_id`,`travel_al_infor`.`code`as `trvCode`, `traveling_allovanceTB`.`published_date` as `published_date`, `traveling_allovanceTB`.`pay_tvel_allovance` as `pay_tvel_allovance` FROM `traveling_allovanceTB` JOIN `travel_al_infor` ON `traveling_allovanceTB`.`trv_infor_id` = `travel_al_infor`.`trv_infor_id`";
$this->createTB->value = $travel_joinSEL;
$this->createTB->mysqli= $mysqli;
return $this->createTB->executeqry();
}

public function select_trvl_infor_select($mysqli){
$trvinfor = "SELECT `trv_infor_id`, `code`, `Description` FROM `travel_al_infor`";
$this->createTB->value = $trvinfor; // Set the value property
$this->createTB->mysqli = $mysqli;
return $this->createTB->executeqry();  
}

public function deleteTravel_infor($mysqli, $inforid){
$trvinfor = "DELETE FROM `travel_al_infor` WHERE `trv_infor_id` = '$inforid'";
$this->createTB->value = $trvinfor; // Set the value property
$this->createTB->mysqli = $mysqli;
$this->createTB->executeqry();  
}

public function deleteTravel_allov($mysqli, $inforid){
$trvinfor = "DELETE FROM `traveling_allovanceTB` WHERE `trv_id` = '$inforid'";
$this->createTB->value = $trvinfor; // Set the value property
$this->createTB->mysqli = $mysqli;
$this->createTB->executeqry();  
}
}

class allowance_paymanet_range{
    public $createTB;

    public function  __construct(){
    $this->createTB = new excu();
    }
    public function allowancePriceRange($mysqli, $st_price, $ed_price, $alowPrice){
        $trvinfor = "INSERT INTO `monthly_salary_allowance_range`(`start_salary_range`, `end_salary_range`, `allowance_price`) VALUES ('$st_price', '$ed_price', '$alowPrice')";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    public function allowancePriceRangeSelect($mysqli){
        $trvinfor = "SELECT `slry_id`, `start_salary_range`, `end_salary_range`, `allowance_price` FROM `monthly_salary_allowance_range` ORDER BY `start_salary_range` ASC";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
    public function allowancePriceRangeDelete($mysqli, $id){
        $trvinfor = "DELETE FROM `monthly_salary_allowance_range` WHERE `slry_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
    public function Change_allowancePriceRange($mysqli, $range_id, $column_id, $New_condition_allowance){
        switch ($column_id) {
            case '1':
                $trvinfor = "UPDATE `monthly_salary_allowance_range` SET `start_salary_range` = '$New_condition_allowance' WHERE `slry_id` = '$range_id'";
                break;
            case '2':
                $trvinfor = "UPDATE `monthly_salary_allowance_range` SET `end_salary_range` = '$New_condition_allowance' WHERE `slry_id` = '$range_id'";
                break;
            
            default:
                 $trvinfor = "UPDATE `monthly_salary_allowance_range` SET `allowance_price` = '$New_condition_allowance' WHERE `slry_id` = '$range_id'";
                break;
        }

        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
}

class allowance_event_paymanet{
    public $createTB;
     public $Msub;
    public function  __construct(){
    $this->createTB = new excu();
    $this->Msub = new genarateMonthlySub();
    }
    public function allowance_event_paymanet_insert($mysqli, $TeacherName, $description_allowance, $alowPrice, $formysqlDate){
        $trvinfor = "INSERT INTO `monthly_add_eventAllowance`(`slry_allowance_event_description`, `slry_allowance_event_description_date`, `slry_allowance_event_description_price`, `empid`) VALUES ('$description_allowance', '$formysqlDate', '$alowPrice', '$TeacherName')";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    public function allowance_event_paymanet_select($mysqli){

        $trvinfor = "SELECT
        `MEALL`.`slry_allowance_event_id` as `slryEAID`,
        `MEALL`.`slry_allowance_event_description` as `slrydescription`,
        `MEALL`.`slry_allowance_event_description_date` as `slryDate`,
        `MEALL`.`slry_allowance_event_description_price` as `slryPrice`,
        `MEALL`.`confirm` as `confirm`,
        `employ_detail1`.`frist_name` as `frist_name`,
        `employ_detail1`.`last_name` as `lastname`,
        `employ_detail1`.`image` as `imgdata`
        FROM `monthly_add_eventAllowance` as `MEALL`
        JOIN `employ_detail1` ON `MEALL`.`empid` = `employ_detail1`.`empid`
        ORDER BY `MEALL`.`slry_allowance_event_description_date` DESC";

        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
    public function allowance_event_paymanet_Delete($mysqli, $id){
        $trvinfor = "DELETE FROM `monthly_add_eventAllowance` WHERE `slry_allowance_event_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
    //get the  empid and allowance
    public function allowance_event_paymanet_Val($mysqli, $id){
        $trvinfor = "SELECT `slry_allowance_event_id`, `slry_allowance_event_description`, `slry_allowance_event_description_date`, `slry_allowance_event_description_price`, `empid`, `confirm` FROM `monthly_add_eventAllowance` WHERE `slry_allowance_event_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }    
    public function allowance_event_paymanet_conform($mysqli, $id){
        $trvinfor = "UPDATE `monthly_add_eventAllowance` SET `confirm` = '1' WHERE `slry_allowance_event_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  

        $Teachid = $this->allowance_event_paymanet_Val($mysqli, $id)->fetch_assoc()["empid"];
        $allowance = $this->allowance_event_paymanet_Val($mysqli, $id)->fetch_assoc()["slry_allowance_event_description_price"];
         
        $this->Msub->genarateMonthlySub_In_Up_3($mysqli, $id, $Teachid, $allowance);
    }    
    

}

class loansec{
    public $createTB;
    public $Msub;
    public function  __construct(){
    $this->createTB = new excu();
    $this->Msub = new genarateMonthlySub();
    }
    public function loansec_insert($mysqli, $TeacherName, $description_allowance, $alowPrice, $formysqlDate){
        $trvinfor = "INSERT INTO `loanTB`(`loanSec_description`, `loanSec_description_date`, `loanSec_price`, `empid`) VALUES ('$description_allowance', '$formysqlDate', '$alowPrice', '$TeacherName')";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    public function loansec_select($mysqli){

        $trvinfor = "SELECT `loanTB`.`loanSec_id`  as `loanid`, `loanTB`.`loanSec_description`  as `lnrdescription`, `loanTB`.`loanSec_description_date`  as `lnrdate` , `loanTB`.`loanSec_price`  as `lnpPrice`, `loanTB`.`confirm` as `crnf`, `employ_detail1`.`frist_name` as `frname`, `employ_detail1`.`last_name` as`lstname`, `loanTB`.`empid`  as `empid` FROM `loanTB` JOIN `employ_detail1` ON `loanTB`.`empid` = `employ_detail1`.`empid` ORDER BY `loanTB`.`loanSec_id` DESC";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
    // >>Select Loan installment 
    public function select_loan_installment($mysqli){
                $trvinfor = "SELECT 
        `loanTB`.`loanSec_id`  as `loanid`, 
        `loanTB`.`loanSec_description`  as `lnrdescription`, 
        `loanTB`.`loanSec_description_date`  as `lnrdate` , 
        `loanTB`.`loanSec_price`  as `lnpPrice`, 
        `loanTB`.`confirm` as `crnf`, 
        `employ_detail1`.`frist_name` as `frname`, 
        `employ_detail1`.`last_name` as`lstname`, 
        `loanTB`.`empid`  as `empid`,
        DATE_FORMAT(`Loans_Installment`.`Month_gen`, '%Y-%m') AS `Month_gen`,
        `Loans_Installment`.`Installment` AS `Installment`,
        `Loans_Installment`.`confirm_instalment` AS `confirm_instalment`
        FROM 
        `loanTB` 
        JOIN 
        `employ_detail1` 
        ON `loanTB`.`empid` = `employ_detail1`.`empid` 
        JOIN `Loans_Installment` 
        ON `loanTB`.`loanSec_id` = `Loans_Installment`.`loanSec_id`
        ORDER BY `loanTB`.`loanSec_id`";

        $this->createTB->value = $trvinfor;
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }    
    // >>Select Loan installment Insert before check
    public function select_loan_installment_insert_before_check($mysqli, $TeacherName){
                $trvinfor = "SELECT 
        `loanTB`.`loanSec_id`  as `loanid`, 
        `loanTB`.`loanSec_description`  as `lnrdescription`, 
        `loanTB`.`loanSec_description_date`  as `lnrdate` , 
        `loanTB`.`loanSec_price`  as `lnpPrice`, 
        `loanTB`.`confirm` as `crnf`, 
        `employ_detail1`.`frist_name` as `frname`, 
        `employ_detail1`.`last_name` as`lstname`, 
        `loanTB`.`empid`  as `empid`,
        DATE_FORMAT(`Loans_Installment`.`Month_gen`, '%Y-%m') AS `Month_gen`,
        `Loans_Installment`.`Installment` AS `Installment`,
        `Loans_Installment`.`confirm_instalment` AS `confirm_instalment`
        FROM 
        `loanTB` 
        JOIN 
        `employ_detail1` 
        ON `loanTB`.`empid` = `employ_detail1`.`empid` 
        JOIN `Loans_Installment` 
        ON `loanTB`.`loanSec_id` = `Loans_Installment`.`loanSec_id`
        WHERE `Loans_Installment`.`confirm_instalment` = '0' AND `loanTB`.`empid` = '$TeacherName'
        ORDER BY `loanTB`.`loanSec_id`";

        $this->createTB->value = $trvinfor;
        $this->createTB->mysqli = $mysqli;
        $getdata = $this->createTB->executeqry();  
        $conditionTrue;
        if ($getdata->num_rows > 0) {
            return $conditionTrue = "1";
        }
        else{
            return $conditionTrue = "0";
        }
    }    
    //get the loan value
    public function loansec_select_loanVal($mysqli, $id){

        $trvinfor = "SELECT `loanSec_id`, `loanSec_description`, `loanSec_description_date`, `loanSec_price`, `empid`, `confirm` FROM `loanTB` WHERE `loanSec_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }    

    public function loansec_Delete($mysqli, $id){
        $trvinfor2 = "DELETE FROM `Loans_Installment` WHERE `loanSec_id` = '$id'";
        $this->createTB->value = $trvinfor2; 
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry(); 

        $trvinfor = "DELETE FROM `loanTB` WHERE `loanSec_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    // >> Add installment of main loan
    public function Add_installment_loan_section($mysqli, $dataToInsert){
            foreach ($dataToInsert as $data) {
        $month = $mysqli->real_escape_string($data['month']);
        $installment = $mysqli->real_escape_string($data['installment']);
        $id_of_loan = $mysqli->real_escape_string($data['id_of_loan']);

        $timestamp = strtotime($month);
         $formattedDate = date("Y-m-d", $timestamp);

        // Perform the database insertion
        $sql = "INSERT INTO Loans_Installment (loanSec_id, Month_gen, Installment) VALUES ('$id_of_loan', '$formattedDate', '$installment')";

        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    }
    /*
        >> Update loan secion
        ** Cancel main confirm of mian loan table. and set to instllment loan table. 
    */
    public function loansec_confirmed($mysqli, $id){
        $trvinfor = "UPDATE `loanTB` SET `confirm`='1' WHERE `loanSec_id` = '$id'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
         $this->createTB->executeqry();  

    } 
    // >>> installment confirm   
    public function confirmed_installment($mysqli, $installment_id, $installment_date, $installment_amount, $installment_emiId){
        $trvinfor = "UPDATE `Loans_Installment` SET `confirm_instalment` = '1' WHERE `loanSec_id` = '$installment_emiId' AND DATE_FORMAT(`Month_gen` , '%Y-%m') = '$installment_date'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
         $this->createTB->executeqry();  

        //  $Teachid = $this->loansec_select_loanVal($mysqli, $id)->fetch_assoc()["empid"];
        //  $loanprice = $this->loansec_select_loanVal($mysqli, $id)->fetch_assoc()["loanSec_price"];
         $id = $installment_id;
         $Teachid = $installment_emiId;
         $loanprice = $installment_amount;

         $this->Msub->genarateMonthlySub_In_Up_2($mysqli, $id, $Teachid, $loanprice);
       // echo $teachid;
    }    
    // >> Settled the all loan of employee
    // ** Manually settled the loan
    public function Setteled_the_all_loan_of_employee($mysqli, $loanId){
        $trvinfor = "UPDATE `Loans_Installment` SET `confirm_instalment` = '1'  WHERE `loanSec_id` = '$loanId'";
        $this->createTB->value = $trvinfor; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  

    } 
 
}

// my activity
class myActivityTech{
public $createTB;
public function __construct(){
     $this->createTB = new excu();
}
public function selectMyActivity($mysqli, $scheds3){
     $myactive = "SELECT 
            `monthlyLastTotal`.`monthly_salary_lst_id` AS `mLid`,
            `monthlyLastTotal`.`Msub_confirm` AS `Msub_confirm`,
            DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y-%m') AS `mldate`,
            `monthlyLastTotal`.`Mlst_empid` AS `empid`,
            `monthlyLastTotal`.`Mnet_salary` AS `mlsalary`,
            `monthlyLastTotal`.`Mbonus` AS `bonus`,
            COUNT(CASE WHEN `confirm_time_table`.`confirmation_session` = '1' THEN `time_table`.`time_table_id` END) AS `completedTask`,
            COUNT(`confirm_time_table`.`confirmation_session`) AS `Task`,
            `employ_detail1`.`frist_name` AS `fname`,
            `employ_detail1`.`last_name` AS `lname`
        FROM 
            `monthlyLastTotal`
        JOIN 
            `confirm_time_table` ON `monthlyLastTotal`.`Mlst_empid` = `confirm_time_table`.`empid`
        JOIN 
            `time_table` ON `confirm_time_table`.`time_table_id` = `time_table`.`time_table_id`
        JOIN 
            `employ_detail1` ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid`
        WHERE
        `monthlyLastTotal`.`Mlst_empid` = '$scheds3'
        GROUP BY 
            `monthlyLastTotal`.`Mlst_empid`, YEAR(`monthlyLastTotal`.`Mlst_date`), MONTH(`monthlyLastTotal`.`Mlst_date`)";

        $this->createTB->value = $myactive; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
}
//for teacher
public function selectMyActivity_forAdimn($mysqli){
     $myactive = "SELECT 
    `monthlyLastTotal`.`monthly_salary_lst_id` AS `mLid`,
    `monthlyLastTotal`.`Msub_confirm` AS `Msub_confirm`,
    DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y-%m') AS `mldate`,
    `monthlyLastTotal`.`Mlst_empid` AS `empid`,
    `monthlyLastTotal`.`Mnet_salary` AS `mlsalary`,
    `monthlyLastTotal`.`Mbonus` AS `bonus`,
    COUNT(CASE WHEN `confirm_time_table`.`confirmation_session` = '1' THEN `time_table`.`time_table_id` END) AS `completedTask`,
    COUNT(`confirm_time_table`.`confirmation_session`) AS `Task`,
    `employ_detail1`.`frist_name` AS `fname`,
    `employ_detail1`.`last_name` AS `lname`
FROM 
    `monthlyLastTotal`
JOIN 
    `confirm_time_table` ON `monthlyLastTotal`.`Mlst_empid` = `confirm_time_table`.`empid`
JOIN 
    `time_table` ON `confirm_time_table`.`time_table_id` = `time_table`.`time_table_id`
JOIN 
    `employ_detail1` ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid`
GROUP BY 
    `monthlyLastTotal`.`Mlst_empid`, YEAR(`monthlyLastTotal`.`Mlst_date`), MONTH(`monthlyLastTotal`.`Mlst_date`)";

        $this->createTB->value = $myactive; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
}

public function selectMyActivity_forAdimn_report($mysqli){
     $myactive = "SELECT 
    `monthlyLastTotal`.`monthly_salary_lst_id` AS `mLid`,
    `monthlyLastTotal`.`Msub_confirm` AS `Msub_confirm`,
    DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y-%m') AS `mldate`,
    `monthlyLastTotal`.`Mlst_empid` AS `empid`,
    `monthlyLastTotal`.`Mnet_salary` AS `mlsalary`,
    `monthlyLastTotal`.`Mbonus` AS `bonus`,
    SUM(`monthlyLastTotal`.`Mnet_salary` + `monthlyLastTotal`.`Mbonus`) AS `total`,
    `employ_detail1`.`frist_name` AS `fname`,
    `employ_detail1`.`last_name` AS `lname`
FROM 
    `monthlyLastTotal`
JOIN 
    `employ_detail1` 
    ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid`
GROUP BY 
    `monthlyLastTotal`.`Mlst_empid` AND DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y-%m');";

        $this->createTB->value = $myactive; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
}
}  

//supperuser
class supperUser{
    public $createTB;
    public function __construct(){
        $this->createTB = new excu();
    }

    public function add_supperUser($mysqli, $spusr, $sppass){
        $spusr = "INSERT INTO `super_user`(`user_name`, `passwordsec`) VALUES ('$spusr', SHA2('$sppass', 256))";
        $this->createTB->value = $spusr; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }

        public function select_supperUser($mysqli){
        $spusr = "SELECT `empid`, `user_name`, `email`, `Imgsppusr` FROM `super_user`";
        $this->createTB->value = $spusr; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    }
        public function delete_supperUser($mysqli, $id){
        $spusr = "DELETE FROM `super_user` WHERE `empid` = '$id'";
        $this->createTB->value = $spusr; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }    
        public function Permission_add($mysqli, $id, $allValues) {
        foreach ($allValues as $value2) {
            $spusr = "INSERT INTO `permissionManagerTb`(`empid`, `permission`) VALUES ('$id','$value2')";
            $this->createTB->value = $spusr; // Set the value property
            $this->createTB->mysqli = $mysqli;
            $this->createTB->executeqry();  
        }
    }     
    
}

class adimin_and_supper_user{
    public $createTB;
    public function __construct(){
        $this->createTB = new excu();
    }
public function select_the_salary($mysqli){
        date_default_timezone_set('Asia/Colombo');
    $todaydate = date('Y-m-d');
    $yearMonth = date('Ym', strtotime($todaydate));

        $sql = "SELECT
    `monthlyLastTotal`.`Mlst_empid` AS `empid`,
    SUM(`monthlyLastTotal`.`Mnet_salary` + `monthlyLastTotal`.`Mbonus`) AS `Mtt`,
    `employ_detail1`.`frist_name` AS `frist_name`,
    `employ_detail1`.`last_name` AS `last_name`,
    `monthlyLastTotal`.`Mlst_date` AS `empMonth`
FROM
    `monthlyLastTotal`
JOIN
    `employ_detail1` ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid`
WHERE
    DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y%m') = '$yearMonth' ORDER BY `Mtt` ";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//All total of this month
public function select_the_salary_month($mysqli){
        date_default_timezone_set('Asia/Colombo');
    $todaydate = date('Y-m-d');
    $yearMonth = date('Ym', strtotime($todaydate));

        $sql = "SELECT  sum(`Mnet_salary` + `Mbonus`) AS `alltt` FROM `monthlyLastTotal` WHERE DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y%m') = '$yearMonth'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Count of teacher
public function select_countTech($mysqli){
        $sql = "SELECT COUNT(*) as `tech` FROM `employ_detail1`";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Count of user
public function select_countuser($mysqli){
        $sql = "SELECT COUNT(*) AS `suser` FROM `super_user`";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//event of admin
public function select_event($mysqli){
        date_default_timezone_set('Asia/Colombo');
    $todaydate = date('Y-m-d');
    $yearMonth = date('Ym', strtotime($todaydate));

        $sql = "SELECT `event_id`, `event_header`, `event_description`, `publish_date`, `image` FROM `event` WHERE  DATE_FORMAT(`publish_date`, '%Y%m') = '$yearMonth' ORDER BY `event_id` DESC";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//event of admin
public function select_empdetail($mysqli){
        
        $sql = "SELECT `employ_teacher`.`user_name` AS `username`, `employ_detail1`.`frist_name` AS `fname`, `employ_detail1`.`last_name` AS `lname`, `employ_detail1`.`address` AS `addr`, `employ_detail1`.`contact_number` AS `contrct`, `employ_detail1`.`email` AS `eml`, `employ_detail1`.`NIC` AS `nic`, `employ_detail1`.`image` AS `mg` FROM `employ_teacher` JOIN `employ_detail1` ON `employ_teacher`.`empid` = `employ_detail1`.`empid`";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//adm password change
public function changeThePaasadm($mysqli, $sessionID, $usrpass){
        
        $sql = "UPDATE `adm` SET `passwordsec` = SHA2('$usrpass', 256) WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//supper user password change
public function changeThePaassupperuser($mysqli, $sessionID, $usrpass){
        
        $sql = "UPDATE `super_user` SET `passwordsec` = SHA2('$usrpass', 256) WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//select_adm_email
public function select_adm_email(){
        $sql = "UPDATE `super_user` SET `passwordsec` = SHA2('$usrpass', 256) WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//select_adm_email
public function select_supper_email(){
        $sql = "UPDATE `super_user` SET `passwordsec` = SHA2('$usrpass', 256) WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Add email Adm
public function addemailadm($mysqli, $sessionID, $myEmail){
        $sql = "UPDATE `adm` SET `email` = '$myEmail' WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}
//Add email supper user
public function addemailspu($mysqli, $sessionID, $myEmail){
        $sql = "UPDATE `super_user` SET `email` = '$myEmail' WHERE `empid` = '$sessionID'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Add email supper user
public function spuPermission($mysqli){
        $sql = "SELECT 
        `super_user`.`empid` AS `empid`,
         `super_user`.`user_name` AS `user_name`,
          `super_user`.`passwordsec` AS `passwordsec`,
           `super_user`.`email` AS `email`,
            `super_user`.`Imgsppusr` as `Imgsppusr`,
             `super_user`.`Code` as `Code`,
              `permissionTb`.`permission_description` AS `permission_description`,
               `permissionManagerTb`.`permissionID` AS `permissionID`
                FROM `super_user`
                LEFT JOIN `permissionManagerTb`
                 ON `super_user`.`empid` = `permissionManagerTb`.`empid`
                  JOIN `permissionTb`
                   ON `permissionManagerTb`.`permission` = `permissionTb`.`permission_code`";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Add email supper user
public function techPermission($mysqli){
        $sql = "SELECT `employ_teacher`.`empid` AS `empid`, `employ_teacher`.`user_name` AS `user_name`, `employ_teacher`.`passwordsec` AS `passwordsec`, `employ_teacher`.`codeR` AS `codeR`, `permissionManagerTb`.`permissionID` AS `permissionID`, `permissionTb`.`permission_description` AS `permission_description` FROM `permissionManagerTb` LEFT JOIN `permissionTb` ON `permissionManagerTb`.`permission` = `permissionTb`.`permission_code` JOIN `employ_teacher` ON `permissionManagerTb`.`empid` = `employ_teacher`.`empid`";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//Add email supper user
public function spuPermissionDelete($mysqli, $id){
        $sql = "DELETE FROM `permissionManagerTb` WHERE `permissionID` = '$id'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}

//confirmed Monthly salary details
public function confirmedMonthly_salary($mysqli, $id){
        $sql = "UPDATE `monthlyLastTotal` SET `Msub_confirm` = '1' WHERE `monthly_salary_lst_id` = '$id'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}
//Add email supper user
/*public function techPermissionDelete($mysqli, $id){
        $sql = "DELETE FROM `permissionManagerTb` WHERE `permissionID` = '$id'";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
}*/

}

class massage{
    public $createTB;
    public function __construct(){
        $this->createTB = new excu();
    }

    public function sendmsg($mysqli, $name, $email, $subject, $message){
        $sql = "INSERT INTO `clientmsg`(`nameofcld`, `email`, `SUBJ`, `Masg`) VALUES ('$name', '$email', '$subject', '$message')";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    }
    public function changeThePaasadm($mysqli, $name, $email, $subject, $message){
        $sql = "INSERT INTO `clientmsg`(`nameofcld`, `email`, `SUBJ`, `Masg`) VALUES ('$name', '$email', '$subject', '$message')";
        $this->createTB->value = $sql; // Set the value property
        $this->createTB->mysqli = $mysqli;
        $this->createTB->executeqry();  
    } 

}


//calculation 

class calculationSalary{
    public $createTB;


    public function __construct(){
        $this->createTB = new excu();

    }

    //name
    public function getName($mysqli, $empID, $serchDate){

        $sql1 = "SELECT 
        `frist_name`,
         `last_name`
          FROM 
          `employ_detail1`
           WHERE
            `empid` = '$empID'";
        $this->createTB->value = $sql1; // Set the value property
        $this->createTB->mysqli = $mysqli;
       return $this->createTB->executeqry();  
    }
        
    
    //Confirm session
    public function confirmSession($mysqli, $empID, $serchDate){
        $sql2= "SELECT
         `day_salary_gen`.`date_generated` AS `date_generated`,
         `day_salary_gen`.`calculate_hour` AS `calculate_hour`,
         `day_salary_gen`.`total_salary_day` AS `total_salary_day`,
         `day_salary_gen`.`trv_gen` AS `trv_gen`
         FROM 
         `day_salary_gen`
         JOIN `time_table`
         ON `day_salary_gen`.`time_table_id` = `time_table`.`time_table_id`
         JOIN `confirm_time_table`
         ON `time_table`.`time_table_id` = `confirm_time_table`.`time_table_id`
         WHERE 
         `confirm_time_table`.`confirmation_session` = '1'
         AND `confirm_time_table`.`empid` = '$empID'
         AND  DATE_FORMAT(`day_salary_gen`.`date_generated`, '%Y%m') = '$serchDate'";
        $this->createTB->value = $sql2; // Set the value property
        $this->createTB->mysqli = $mysqli;
       return $this->createTB->executeqry();  
    }
    
    

    //transfer session confirm
    public function transfer_session($mysqli, $empID, $serchDate){
        $sql3 = "SELECT 
        `day_salary_gen`.`date_generated` AS `date_generated`,
         `day_salary_gen`.`calculate_hour` AS `calculate_hour`,
          `day_salary_gen`.`total_salary_day` AS `total_salary_day`,
           `day_salary_gen`.`trv_gen` AS `trv_gen`
            FROM 
            `day_salary_gen`
             JOIN `time_table`
              ON `day_salary_gen`.`time_table_id` = `time_table`.`time_table_id`
               JOIN `time_table_session_transfer` 
               ON `time_table`.`time_table_id` = `time_table_session_transfer`.`time_table_id`
                 WHERE
                  `time_table_session_transfer`.`confirmation_session` = '1'
                   AND `time_table_session_transfer`.`take_empid` = '$empID' 
                   AND  DATE_FORMAT(`day_salary_gen`.`date_generated`, '%Y%m') = '$serchDate'";
        $this->createTB->value = $sql3; // Set the value property
        $this->createTB->mysqli = $mysqli;
       return $this->createTB->executeqry();  
    }
        

    //monthly add eventAllowance
    public function Monthly_add_allowance_view($mysqli, $empID, $serchDate){
        $sql4 = "SELECT 
         `slry_allowance_event_description`,
          `slry_allowance_event_description_date`,
           `slry_allowance_event_description_price`
            FROM
             `monthly_add_eventAllowance`
              WHERE
               `empid` = '$empID' 
               AND DATE_FORMAT(`slry_allowance_event_description_date`, '%Y%m') = '$serchDate'
                AND `confirm` = '1'";
        $this->createTB->value = $sql4; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();  
    } 
    

    //credit
    public function credit_sesction_view($mysqli, $empID, $serchDate){
        $sql5 = "SELECT 
        `Loans_Installment`.`Month_gen` AS `loanSec_description_date`,
        `Loans_Installment`.`Installment` AS `loanSec_price`
        FROM 
        `Loans_Installment`
        JOIN 
        `loanTB`
        ON
        `Loans_Installment`.`loanSec_id` = `loanTB`.`loanSec_id`
        WHERE 
        `Loans_Installment`.`confirm_instalment` = '1'
        AND 
        `loanTB`.`empid` = '$empID'
        AND 
        DATE_FORMAT(`Loans_Installment`.`Month_gen`, '%Y%m') = '$serchDate'";

        $this->createTB->value = $sql5; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();    
        }
    

    //sub total
    public function sub_total_section($mysqli, $empID, $serchDate){
        $sql6 = "SELECT 
        `monthly_salary_sub_id`,
         `Msub_empid`, `Msub_date`,
          `Msub_day_salary_gen_last_id`,
           `Msub_day_salary_Total_schedule`, 
           `Msub_slry_bonus_last_id`,
            `Msub_slry_bonus_Total`,
             `Msub_transport_last_id`,
              `Msub_transport_last_Totals`,
               `Msub_event_last_id`,
                `Msub_event_last_Total`,
                 `Msub_loan_last_id`,
                  `Msub_loan_last_Total`,
                   `Msub_confirm` 
                   FROM 
                   `monthlySubtotal`
                    WHERE
                     `Msub_empid` = '$empID' 
                     AND DATE_FORMAT(`Msub_date`, '%Y%m') = '$serchDate'";
        $this->createTB->value = $sql6; // Set the value property
        $this->createTB->mysqli = $mysqli;
       return $this->createTB->executeqry();
    }
    

    //monthly salary
    public function Month_salary_section($mysqli, $empID, $serchDate){
        $sql7 = "SELECT 
        `monthly_salary_lst_id`,
         `Mlst_empid`, `Mlst_date`,
          sum(`Mnet_salary` + `Mbonus`) AS `alltotaol`,
           `Mbonus`,
            `Msub_confirm`
             FROM 
             `monthlyLastTotal`
              WHERE 
              `Mlst_empid` = '$empID'
               AND DATE_FORMAT(`Mlst_date`, '%Y%m') = '$serchDate'";
        $this->createTB->value = $sql7; // Set the value property
        $this->createTB->mysqli = $mysqli;
        return $this->createTB->executeqry();
    }   
    
        
}

class ForgetpassSec{
    public $createTB;
    public $mysqli;
    public $eml;
    public function __construct($mysqli, $eml){
        $this->createTB = new excu();
        $this->mysqli = $mysqli;
        $this->eml = $eml;
    }

    //check email
    public function Check_and_code_send(){
       $check_sql1 = "SELECT `codeR`, `email` FROM `adm` WHERE `email` = ' $this->eml'";
       $check_sql2 = "SELECT  `email`, `Code` FROM `super_user` WHERE `email` = ' $this->eml'"; 
       $check_sql3 = "SELECT 
       `employ_teacher`.`codeR` AS `codeR`,
        `employ_detail1`.`email` AS `email`
          FROM 
          `employ_teacher`
           JOIN `employ_detail1` ON `employ_teacher`.`empid` = `employ_detail1`.`empid`
            WHERE `employ_detail1`.`email` = '$this->eml'"; 

        

        if(($this->createTB->value = $check_sql1) && ($this->createTB->mysqli =  $this->mysqli) && ($resultOut = $this->createTB->executeqry())){
               $code = $resultOut->fetch_assoc()['codeR'];
                $this->sendcode($code);
            echo "1";
        }
        elseif(($this->createTB->value = $check_sql2) && ($this->createTB->mysqli = $this->mysqli) && ($resultOut =$this->createTB->executeqry())){
                $code = $resultOut->fetch_assoc()['Code'];
                $this->sendcode($code);
            echo "1";
        }
        elseif(($this->createTB->value = $check_sql3) && ($this->createTB->mysqli = $this->mysqli) && ($resultOut = $this->createTB->executeqry())){
                $code = $resultOut->fetch_assoc()['codeR'];
                $this->sendcode($code);
            echo "1";
        }
        else{
            echo "0";
        }

    }


    public function summery_schema($code){
    /*    $userEmail = "Ranushmalsika@gmailcom";
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $userEmail;
        $mail->Password = 'your_password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;*/
    }

}

/*
> Summery schema section - Select, Insert, Update, Delete
> Development (Date) : 25 01 24.
> Update : No yet.
    **This is new section develop for subject summery schema
*/
class summery_schema{
    public $createTB;
    public $mysqli;
    public function __construct($mysqli){
        $this->createTB = new excu();
        $this->mysqli = $mysqli;
    }
    //Select the summery schema
    public function Select_summery_schema(){
        $sql5 ="SELECT 
        `summery_id`, 
        DATE_FORMAT(`year_monthcl`, '%Y-%m') AS `formatted_year_month`, 
        `sp_tr_exercs_blank_page_book`, 
        `sp_tr_exercs_progress`, 
        `sp_tr_exercs_action`, 
        `sp_tr_exercs_review_teacher`, 
        `sp_tr_exercs_review_staff`, 
        `vocabulary_abc_book`, 
        `vocabulary_progress`, 
        `vocabulary_action`, 
        `vocabulary_review_teacher`, 
        `vocabulary_review_staff`, 
        `identification_abc_book`, 
        `identification_progress`, 
        `identification_action`, 
        `identification_review_teacher`, 
        `identification_review_staff`, 
        `conversation_and_instruct`, 
        `conversation_and_instruct_2`, 
        `conversation_progress`, 
        `conversation_action`, 
        `conversation_review_teacher`, 
        `conversation_review_staff`, 
        `reading_gunasenas_book`, 
        `reading_progress`, 
        `reading_action`, 
        `reading_review_teacher`, 
        `reading_review_staff`, 
        `writing_ladybird_book`, 
        `writing_progress`, 
        `writing_action`, 
        `writing_review_teacher`, 
        `writing_review_staff` 
        FROM 
        `subject_and_schema_summery`";

        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
       return $this->createTB->executeqry(); 
    }
    //Insert the summery schema
    public function Insert_summery_schema($Date_M, $vocabulary, $READING, $CGC, $exercs_poems, $IOLNSC, $INSTRCTNS, $WARNING){
                $sql5 = "INSERT INTO `subject_and_schema_summery`(
                    `year_monthcl`,
                    `sp_tr_exercs_blank_page_book`,
                    `vocabulary_abc_book`,
                    `identification_abc_book`,
                    `conversation_and_instruct`,
                    `conversation_and_instruct_2`,
                    `reading_gunasenas_book`,
                    `writing_ladybird_book`) 
                    VALUES 
                    ('$Date_M', 
                    '$exercs_poems', 
                    '$vocabulary', 
                    '$IOLNSC', 
                    '$CGC', 
                    '$INSTRCTNS',
                    '$READING', 
                    '$WARNING')";
        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
        $this->createTB->executeqry();    
    }
    //Delete the summery schema
    public function delete_the_summery_schema($summery_id){    
        $sql5 ="DELETE FROM `subject_and_schema_summery` WHERE `summery_id` = '$summery_id'";
        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
        $this->createTB->executeqry(); 
    }
    //Update Staff Comment
    public function update_the_staff_comment($summerize_id, $comment, $colid){
        //echo "awa";
        if($colid == 5){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `sp_tr_exercs_review_staff` = '$comment' /*, 
                    `vocabulary_review_staff` = '',
                    `identification_review_staff` = '',
                    `conversation_review_staff` = '',
                    `reading_review_staff` = '',
                    `writing_review_staff` = ''*/ 
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 10){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `vocabulary_review_staff` = '$comment' /*,
                    `identification_review_staff` = '',
                    `conversation_review_staff` = '',
                    `reading_review_staff` = '',
                    `writing_review_staff` = ''*/ 
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 15){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `identification_review_staff` = '$comment' /*,
                    `conversation_review_staff` = '',
                    `reading_review_staff` = '',
                    `writing_review_staff` = ''*/ 
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 21){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `conversation_review_staff` = '$comment' /*,
                    `reading_review_staff` = '',
                    `writing_review_staff` = ''*/ 
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 26){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `reading_review_staff` = '$comment' /*,
                    `writing_review_staff` = ''*/ 
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 31){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `writing_review_staff` = '$comment'
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        
        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
        $this->createTB->executeqry();     
    }
    //Update Teacher Comment
    public function update_the_teacher_comment($summerize_id, $comment, $colid){
        //echo "awa";
        if($colid == 4){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `sp_tr_exercs_review_teacher` = '$comment' /*, 
                    `vocabulary_review_teacher` = '',
                    `identification_review_teacher` = '',
                    `conversation_review_teacher` = '',
                    `reading_review_teacher` = '',
                    `writing_review_teacher` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 9){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `vocabulary_review_teacher` = '$comment' /*,
                    `identification_review_teacher` = '',
                    `conversation_review_teacher` = '',
                    `reading_review_teacher` = '',
                    `writing_review_teacher` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 14){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `identification_review_teacher` = '$comment' /*,
                    `conversation_review_teacher` = '',
                    `reading_review_teacher` = '',
                    `writing_review_teacher` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 20){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `conversation_review_teacher` = '$comment' /*,
                    `reading_review_teacher` = '',
                    `writing_review_teacher` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 25){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `reading_review_teacher` = '$comment' /*,
                    `writing_review_teacher` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 30){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `writing_review_teacher` = '$comment'
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        
        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
        $this->createTB->executeqry();     
    }    
    //Update Teacher process call
    public function update_the_teacher_Process_call($summerize_id, $process_cal, $colid){
        //echo "awa";
        if($colid == 3){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `sp_tr_exercs_action` = '$process_cal' /*, 
                    `vocabulary_action` = '',
                    `identification_action` = '',
                    `conversation_action` = '',
                    `reading_action` = '',
                    `writing_action` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 8){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `vocabulary_action` = '$process_cal' /*,
                    `identification_action` = '',
                    `conversation_action` = '',
                    `reading_action` = '',
                    `writing_action` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 13){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `identification_action` = '$process_cal' /*,
                    `conversation_action` = '',
                    `reading_action` = '',
                    `writing_action` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 19){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `conversation_action` = '$process_cal' /*,
                    `reading_action` = '',
                    `writing_action` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 24){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `reading_action` = '$process_cal' /*,
                    `writing_action` = ''*/
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        elseif($colid == 29){
            $sql5 ="UPDATE 
                    `subject_and_schema_summery` 
                    SET 
                    `writing_action` = '$process_cal'
                    WHERE
                    `summery_id` = '$summerize_id'";
        }
        
        $this->createTB->value = $sql5;
        $this->createTB->mysqli = $this->mysqli;
        $this->createTB->executeqry();     
    }
}


/*SELECT 
`monthlyLastTotal`.`monthly_salary_lst_id` AS `monthly_salary_lst_id`,
`monthlyLastTotal`.`Mlst_empid` AS `Mlst_empid`,
`monthlyLastTotal`.`Mlst_date` AS `Mlst_date`,

SUM(`monthlyLastTotal`.`Mnet_salary` + `monthlyLastTotal`.`Mbonus`) AS `total`,

`monthlyLastTotal`.`Mbonus` AS `Mbonus`,

`monthlyLastTotal`.`Msub_confirm` AS `Msub_confirm`,

CASE WHEN `confirm_time_table`.`confirmation_session` = '1' AND `confirm_time_table`.`empid` = '12' THEN `day_salary_gen`.`date_generated` END AS `completedTaskDate`,

CASE WHEN `confirm_time_table`.`confirmation_session` = '1' AND `confirm_time_table`.`empid` = '12' THEN `day_salary_gen`.`calculate_hour` END AS `completedTaskHour`,

CASE WHEN `confirm_time_table`.`confirmation_session` = '1' AND `confirm_time_table`.`empid` = '12' THEN `day_salary_gen`.`total_salary_day` END AS `completedTaskSalry`,

CASE WHEN `time_table_session_transfer`.`confirmation_session` = '1' AND `time_table_session_transfer`.`take_empid` = '12' THEN `day_salary_gen`.`date_generated` END AS `completedTaskSesison_date`,

CASE WHEN `time_table_session_transfer`.`confirmation_session` = '1' AND `time_table_session_transfer`.`take_empid` = '12' THEN `day_salary_gen`.`calculate_hour` END AS `completedTaskSesison_Hour`,

CASE WHEN `time_table_session_transfer`.`confirmation_session` = '1' AND `time_table_session_transfer`.`take_empid` = '12' THEN `day_salary_gen`.`total_salary_day` END AS `completedTaskSesison_Salary`,

CASE WHEN `time_table_session_transfer`.`confirmation_session` = '1' AND `time_table_session_transfer`.`take_empid` = '12' THEN `day_salary_gen`.`total_salary_day` END AS `completedTaskSesison_Salary`,

`monthlySubtotal`.`Msub_day_salary_Total_schedule` AS `Msub_day_salary_Total_schedule`,
`monthlySubtotal`.`Msub_transport_last_Totals` AS `Msub_transport_last_Totals`,
`monthlySubtotal`.`Msub_loan_last_Total` AS `Msub_loan_last_Total`,

`employ_detail1`.`frist_name` AS `frist_name`,
`employ_detail1`.`last_name` AS `last_name`

FROM `monthlyLastTotal` JOIN `time_table` ON `monthlyLastTotal`.`Mlst_empid` = `time_table`.`time_table_id` JOIN `confirm_time_table` ON `time_table`.`time_table_id` = `confirm_time_table`.`time_table_id` JOIN `time_table_session_transfer` ON `time_table`.`time_table_id` = `time_table_session_transfer`.`time_table_id` JOIN `day_salary_gen` ON `monthlyLastTotal`.`Mlst_empid` = `day_salary_gen`.`empid` JOIN `monthlySubtotal` ON `monthlyLastTotal`.`Mlst_empid` = `monthlySubtotal`.`Msub_empid` JOIN `employ_detail1` ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid`;*/



/*SELECT 

`monthlyLastTotal`.`monthly_salary_lst_id` AS `monthly_salary_lst_id`,

`monthlyLastTotal`.`Mlst_empid` AS `Mlst_empid`,

`monthlyLastTotal`.`Mlst_date` AS `Mlst_date`,

`monthlyLastTotal`.`Mnet_salary` AS `Mnet_salary`,

SUM(`monthlyLastTotal`.`Mnet_salary` + `monthlyLastTotal`.`Mbonus`) AS `total`,

`monthlyLastTotal`.`Mbonus` AS `Mbonus`,

`monthlyLastTotal`.`Msub_confirm` AS `Msub_confirm`,

`monthlySubtotal`.`Msub_day_salary_Total_schedule` AS `Msub_day_salary_Total_schedule`,

`monthlySubtotal`.`Msub_transport_last_Totals` AS `Msub_transport_last_Totals`,

`monthlySubtotal`.`Msub_loan_last_Total` AS `Msub_loan_last_Total`,

`employ_detail1`.`frist_name` AS `frist_name`,

`employ_detail1`.`last_name` AS `last_name`,
 
 `day_salary_gen`.`calculate_hour` AS `calculate_hour`,
 
 `day_salary_gen`.`total_salary_day` AS `total_salary_day`
 
FROM `monthlyLastTotal` JOIN `monthlySubtotal` ON `monthlyLastTotal`.`Mlst_empid` = `monthlySubtotal`.`Msub_empid` JOIN `day_salary_gen` ON `monthlySubtotal`.`Msub_empid` = `day_salary_gen`.`empid` JOIN `employ_detail1` ON `monthlyLastTotal`.`Mlst_empid` = `employ_detail1`.`empid` WHERE `monthlyLastTotal`.`Mlst_empid` = '12' AND  DATE_FORMAT(`monthlyLastTotal`.`Mlst_date`, '%Y%m') = '202312';*/

?>