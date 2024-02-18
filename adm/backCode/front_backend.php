<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////////////////////////////////////////////
//imagin pragraph

require_once '../../qry/qry.php';
require_once '../../include/dbcon.php';
//100
if(isset($_POST['buttonValue']) && $_POST['buttonValue'] == "100"){
    $btn100 = new btn100();
    $floatingTextarea = $_POST['floatingTextarea'];
    $btn100->btn100_paragraph($mysqli, $floatingTextarea);
    //echo $floatingTextarea;
}

//102
if(isset($_POST['buttonValue']) && $_POST['buttonValue'] == "102"){
    $btn102 = new btn102();
    $floatingTextarea = $_POST['floatingTextarea'];
    $btn102->btn102_paragraph($mysqli, $floatingTextarea);
    //echo $floatingTextarea;
}

//104
if(isset($_POST['buttonValue']) && $_POST['buttonValue'] == "104"){
    $btn104 = new btn104();

    $floatingTextarea1 = $_POST['floatingTextarea1'];
    $floatingTextarea2 = $_POST['floatingTextarea2'];
    $floatingTextarea3 = $_POST['floatingTextarea3'];

    if($floatingTextarea1 != ""){
        $btn104->btn104_1_paragraph($mysqli, $floatingTextarea1);
    }
    if($floatingTextarea2 != ""){
        $btn104->btn104_2_paragraph($mysqli, $floatingTextarea2);
    }
    if($floatingTextarea3 != ""){
        $btn104->btn104_3_paragraph($mysqli, $floatingTextarea3);
    }       
    //echo $floatingTextarea;
}

//106
if(isset($_POST['buttonValue']) && $_POST['buttonValue'] == "106"){
    $btn106 = new btn106();

    $floatingTextarea1 = $_POST['floatingTextarea1'];
    $btn106->btn106_paragraph($mysqli, $floatingTextarea1);

    //echo $floatingTextarea;
}

//108
if($_POST['buttonValue'] == "108"){
    $btn108 = new btn108();
    $result = $btn108->btn108_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}


//109
if($_POST['buttonValue'] == "109"){
    $btn109 = new btn109();
    $result = $btn109->btn109_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph1'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//110
if($_POST['buttonValue'] == "110"){
    $btn110 = new btn110();
    $result = $btn110->btn110_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph2'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//111
if($_POST['buttonValue'] == "111"){
    $btn111 = new btn111();
    $result = $btn111->btn111_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph3'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//112
if($_POST['buttonValue'] == "112"){
    $btn112 = new btn112();
    $result = $btn112->btn112_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph4'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//113
if($_POST['buttonValue'] == "113"){
    $btn113 = new btn113();
    $result = $btn113->btn113_paragraph_show($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['paragraph5'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//114
if($_POST['buttonValue'] == "114"){
    $vission_mission = new vission_mission();
    $result = $vission_mission->btn114($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['small_paragraph'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//115
if($_POST['buttonValue'] == "115"){
    $vission_mission = new vission_mission();
    $result = $vission_mission->btn115($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['vision_paragraph'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//116
if($_POST['buttonValue'] == "116"){
    $vission_mission = new vission_mission();
    $result = $vission_mission->btn116($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = $row['mission_paragraph'];
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//119
if($_POST['buttonValue'] == "119"){
    $vission_mission = new vission_mission();
    $floatingTextarea = $_POST['floatingTextarea'];
    $vission_mission->btn119($mysqli, $floatingTextarea);

}

//121
if($_POST['buttonValue'] == "121"){
    $vission_mission = new vission_mission();
    $floatingTextarea1 = $_POST['floatingTextarea1'];
    $floatingTextarea2 = $_POST['floatingTextarea2'];
    if($floatingTextarea1 != ""){
    $vission_mission->btn121_1($mysqli, $floatingTextarea1);
    }
    if($floatingTextarea2 != ""){
    $vission_mission->btn121_2($mysqli, $floatingTextarea2);
    }

}

//123
if($_POST['buttonValue'] == "123"){
    $contactUs = new contactUs();

    $schoolname = $_POST['schoolname'];
    $tel1 = $_POST['tel1'];
    $tel2 = $_POST['tel2'];
    $adr1 = $_POST['adr1'];
    $gps1 = $_POST['gps1'];
    $call1 = $_POST['call1'];

        if($schoolname != ""){
            $contactUs->btn123_1($mysqli, $schoolname);
            }

        if($tel1 != ""){
            $contactUs->btn123_2($mysqli, $tel1);
        }

        if($tel2 != ""){
            $contactUs->btn123_3($mysqli, $tel2);
            }

        if($adr1 != ""){
            $contactUs->btn123_4($mysqli, $adr1);
        }

        if($gps1 != ""){
            $contactUs->btn123_5($mysqli, $gps1);
            }    

        if($call1 != ""){
            $contactUs->btn123_6($mysqli, $call1);
            }                   

}

//125
if($_POST['buttonValue'] == "125"){
    $contactUs = new contactUs();
    $result = $contactUs->btn125($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph =                   '<tr>
        <th scope="col">School Name</th>
        <td id="sch_view_125">' . $row['sch_name'] . '</td>
      </tr>      
      <tr>
        <th scope="col">Tel 1</th>
        <td id="tel1_view_126">' . $row['telephone_number1'] . '</td>
      </tr>        
      <tr>
        <th scope="col">Tel 2</th>
        <td id="tel2_view_127">' . $row['telephone_number2'] . '</td>
      </tr>        
      <tr>
        <th scope="col">Address</th>
        <td id="adr_view_128">' . $row['address'] . '</td>
      </tr>        
      <tr>
        <th scope="col">GPS</th>
        <td id="gps_view_129">' . $row['location_gps'] . '</td>
      </tr>                
      <tr>
        <th scope="col">Call to us Paragraph</th>
        <td id="cll_view_130">' . $row['paragraph_call'] . '</td>
      </tr>';
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//127
if($_POST['buttonValue'] == "127"){
    $quizdetect = new quizdetect();
    $result = $quizdetect->btn127($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = '<tr>
        <th scope="col">' . $row['quiz'] . '</th>
        <td>' . $row['answer'] . '</td>
      </tr> ';
        // Process or display the fetched data as needed
        echo $paragraph;
    }
} else {
    echo "No found";
}
}

//128
if($_POST['buttonValue'] == "128"){
    $quizdetect = new quizdetect();

    $quiz1 = $_POST['quiz1'];
    $quiz2 = $_POST['quiz2'];
    $quiz3 = $_POST['quiz3'];
    $quiz4 = $_POST['quiz4'];
    $quiz5 = $_POST['quiz5'];    

    $Answer1 = $_POST['Answer1'];
    $Answer2 = $_POST['Answer2'];
    $Answer3 = $_POST['Answer3'];
    $Answer4 = $_POST['Answer4'];
    $Answer5 = $_POST['Answer5'];      
    
    $quizarr = array($quiz1, $quiz2, $quiz3, $quiz4, $quiz5);
    $answerarr = array($Answer1, $Answer2, $Answer3, $Answer4, $Answer5);

    for ($i = 0; $i <= 4; $i++) {
        $methodName = "btn128_" . $i;

            try {
                $quizdetect->$methodName($mysqli, $quizarr[$i], $answerarr[$i]);
            } catch (Exception $e) {
                // Handle the exception here
                echo "An error occurred: " . $e->getMessage();
            }

    }
}


//btn 129
if ($_POST['buttonValue'] == "129") {
    $eventadd = new eventadd();

    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle file upload
    $targetDir = "uploadImage/";
    $originalFileName = basename($_FILES["file"]["name"]);

    $timestamp = date("YmdHis");
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $newFileName = $timestamp . "_" . $title . "." . $extension;
    $targetFile = $targetDir . $newFileName;

    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if ($check !== false) {
        list($width, $height) = $check;

        if ($width == 320 && $height == 180) {

            try{
                $eventadd->btn129($mysqli, $title, $description, $newFileName);
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
            
                } catch (Exception $e) {
                    echo "An error occurred: " . $e->getMessage();
                }
                   // echo "122";


        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid image dimensions. Please upload an image with dimensions 320 x 180 pixels.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid file type. Please upload an image.']);
    }

   // echo error_reporting(E_ALL);
    //exit;
}


//131
if($_POST['buttonValue'] == "131"){
    $eventadd = new eventadd();
    $result = $eventadd->btn131($mysqli);
   // echo "no";
   if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $paragraph = '<tr>
            <td>' . $row['event_header'] . '</td>
            <td>' . $row['publish_date'] . '</td>
            <td>' . $row['event_description'] . '</td>
            <td>
                <div class="gallery">
                    <a href="backCode/uploadImage/' . $row['image'] . '" class="image-link">
                        <img src="backCode/uploadImage/' . $row['image'] . '" height="80%" width="80%">
                    </a>
                </div>
            </td>
            <td>
                <button class="btn btn-danger btn-sm btnEventDelete" value="' . $row['event_id'] . '">Delete</button>
            </td>
        </tr>';
        // Process or display the fetched data as needed
        echo $paragraph;
    }

    echo '<script>
        $(document).ready(function() {
            $(".gallery").magnificPopup({
                delegate: "a.image-link",
                type: "image",
                gallery: {
                    enabled: true
                }
            });

            // btnEventDelete class instead of ID
            $(".btnEventDelete").click(function () {
                var buttonValue = $(this).attr("class");
                var buttonValue1 = $(this).val();
                var buttonValue2 = $(this).closest("tr").find("img").attr("src");
                $.ajax({
                    type: "POST",
                    url: "backCode/front_backend.php",
                    data: {
                        buttonValue: buttonValue,
                        buttonValue1: buttonValue1,
                        buttonValue2: buttonValue2
                    },
                    success: function (response) {
                       // Swal.fire(response);
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "your task saved",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        window.location.href = "make_event.php";
                    }
                });
                Swal.fire(buttonValue);
            });
        });
    </script>';
} else {
    echo "No found";
}
}

//btn 132
if($_POST['buttonValue'] == "btn btn-danger btn-sm btnEventDelete"){
    $eventadd = new eventadd();
    $btnval = $_POST['buttonValue1'];
    $btnvalatr = $_POST['buttonValue2'];
    $result = $eventadd->btn132($mysqli, $btnval);
    unlink('../'. $btnvalatr);

}

//btn 133
if($_POST['buttonValue'] == "133"){
    $creat_and_update_calss = new creat_and_update_calss();
    $class_name = $_POST['class_name'];
    $str_date = $_POST['str_date'];
    $end_date = $_POST['end_date'];

    $str_date1 = new DateTime($str_date);
    $str_date2 = $str_date1->format('Y-m-d');

    $end_date1 = new DateTime($end_date);
    $end_date2 = $end_date1->format('Y-m-d');

    $creat_and_update_calss->createClassStr($mysqli, $class_name, $str_date2, $end_date2);
    

}

//btn 135
if($_POST['buttonValue'] == "btn_135"){
    $creat_and_update_calss = new creat_and_update_calss();
    $class_id = $_POST['classId'];
    $creat_and_update_calss->deleteClass($mysqli, $class_id); 
}


//btn 136
if($_POST['buttonValue'] == "136"){
    $creat_and_update_calss = new creat_and_update_calss();
    $class_id = $_POST['class_id'];
    $class_name = $_POST['class_name'];
    $str_date = $_POST['str_date'];
    $end_date = $_POST['end_date'];

    $str_date1 = new DateTime($str_date);
    $str_date2 = $str_date1->format('Y-m-d');

    $end_date1 = new DateTime($end_date);
    $end_date2 = $end_date1->format('Y-m-d');

    if(!empty($class_name)){
        $creat_and_update_calss->EditClassName($mysqli, $class_name, $class_id);

    }
    if(!empty($str_date)){
        $creat_and_update_calss->EditClassStr_date($mysqli, $str_date2, $class_id);

    }
    if(!empty($end_date)){
        $creat_and_update_calss->EditClassEnd($mysqli, $end_date2, $class_id);

    }
 
}

////////////
//btn 140
if($_POST['buttonValue'] == "140"){
    $creat_and_update_subject = new creat_and_update_subject();
    $subject_name = $_POST['subject_name'];
    $creat_and_update_subject->createsubject($mysqli, $subject_name);
    

}

//btn 142
if($_POST['buttonValue'] == "142"){
    $creat_and_update_subject = new creat_and_update_subject();
    $Edit_subject_id = $_POST['Edit_subject_id'];
    $Edit_subject = $_POST['Edit_subject'];
    $creat_and_update_subject->EditSubjectName($mysqli, $Edit_subject_id,  $Edit_subject); 
}

//btn 139
if($_POST['buttonValue'] == "btn_139"){
    $creat_and_update_subject = new creat_and_update_subject();
    $sbid = $_POST['sbid'];
    $creat_and_update_subject->deleteSubject($mysqli, $sbid); 
}

//btn 145
if($_POST['buttonValue'] == "btn_145"){
    $creat_and_update_Teacher = new creat_and_update_Teacher();
    $tech = $_POST['tech'];
    $creat_and_update_Teacher->deleteTeacher($mysqli, $tech); 
}

//btn 146
if($_POST['buttonValue'] == "146"){
    $creat_and_update_Teacher = new creat_and_update_Teacher();
    $teacher_name = $_POST['teacher_name'];
    $passwordField = $_POST['passwordField'];
    $creat_and_update_Teacher->createTeacher($mysqli, $passwordField, $teacher_name); 
}

//btn 148
if($_POST['buttonValue'] == "148_1"){

    extract($_POST);
 

    /*if(empty($id)){*/
       // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $insertTimetbl = new insertTimetbl();
    
        $titile_datetime = new DateTime($titile_datetime);
        $titile_datetime2 = $titile_datetime->format('Y-m-d');
    
        $starttime = date("H:i:s", strtotime($starttime));
        $endtime = date("H:i:s", strtotime($endtime));    
    
        $insertTimetbl->timeTbleTb($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName, $Select_transport);
      
      //  echo $end_datetime2 . "<br/>" . $formatted_starttime . "<br/>" . $formatted_endtime . "<br/>" . $classfrmid . "<br/>" . $subjectName . "<br/>" . $TeacherName ;
  //  }

    
}

//btn 148
if($_POST['buttonValue'] == "148_2"){

    extract($_POST);
 

    /*if(empty($id)){*/
       // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $insertTimetbl = new insertTimetbl();
    
        $titile_datetime = new DateTime($titile_datetime);
        $titile_datetime2 = $titile_datetime->format('Y-m-d');
    
        $starttime = date("H:i:s", strtotime($starttime));
        $endtime = date("H:i:s", strtotime($endtime));    
    
        $insertTimetbl->timeTbleTb2($mysqli, $titile_datetime2, $starttime, $endtime, $classfrmid, $subjectName, $TeacherName);
      
      //  echo $end_datetime2 . "<br/>" . $formatted_starttime . "<br/>" . $formatted_endtime . "<br/>" . $classfrmid . "<br/>" . $subjectName . "<br/>" . $TeacherName ;
  //  }

    
}

/*//btn 149
if($_POST['buttonValue'] == "149"){

        $timeTbleTb = new timeTbleTb();  
        $result = $timeTbleTb->check_timeTbleTb($mysqli);
    if ($result && $result->num_rows > 0) {
        while($data_row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
        $data_arr[$i]['timeTbID'] = $data_row['timeTbID'];            	
        $data_arr[$i]['Sheduldate'] = date("Y-m-d", strtotime($data_row['Sheduldate']));
        $data_arr[$i]['stTime'] = date("h:i A", strtotime($data_row['stTime']));
        $data_arr[$i]['endTime'] = date("h:i A", strtotime($data_row['endTime']));
        
        $data_arr[$i]['subjectName'] = $data_row['subjectName'];
        $data_arr[$i]['className'] = $data_row['className'];

        $data_arr[$i]['fristNameTime'] = $data_row['fristNameTime'];
        $data_arr[$i]['lastNameTime'] = $data_row['lastNameTime'];
        $data_arr[$i]['imageTime'] = $data_row['imageTime'];

        if($data_row['transferSeeion'] == "1"){
            $data_arr[$i]['tra_frist_name'] = $data_row['tra_frist_name'];
            $data_arr[$i]['tra_lastname'] = $data_row['tra_lastname'];
            $data_arr[$i]['tra_image'] = $data_row['tra_image'];            
        }

        $data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
        $i++;
        }
    }
   

    
}*/

//btn 150
if($_POST['buttonValue'] == "150"){
extract($_POST);
        $insertTimetbl = new insertTimetbl();  
        $insertTimetbl->timeTbleTbDelete($mysqli, $id);
}

//btn 152
if($_POST['buttonValue'] == "152"){
extract($_POST);
        $teacher_Timetbl = new teacher_Timetbl();  
        $result20 = $teacher_Timetbl->teacher_Timetbl_crmf($mysqli, $getid, $scheds3);
        echo $result20;
}

//btn 153
if($_POST['buttonValue'] == "153"){
extract($_POST);
        $teacher_Timetbl = new teacher_Timetbl();  
        $restlt153 = $teacher_Timetbl->teacher_Timetbl_tran($mysqli, $tblid, $TeacherName, $getemid);
        echo $restlt153;
}

// 154
if ($_POST['buttonValue'] == "154") {
   // extract($_POST);

    $addtech = new addTeacher_details();
    $sessionID = $_POST['sessionID'];//////////////////////////////////////////////////////////////session
    $frstName = $_POST['frstName'];
    $lstnName = $_POST['lstnName'];
    $adr = $_POST['adr'];
    $eml = $_POST['eml'];
    $nic = $_POST['nic'];
    $cnfnm = $_POST['cnfnm'];

if(isset($_FILES["file"])) {
    // Handle file upload
    $targetDir = "uploadImage/";
    $originalFileName = basename($_FILES["file"]["name"]);

 
// array


    // rename image
    $timestamp = date("YmdHis");
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $newFileName = $timestamp . "_" . "tech" . "." . $extension;
    $targetFile = $targetDir . $newFileName;

    $datagetarray = array($frstName, $lstnName, $adr, $cnfnm, $eml, $nic, $newFileName);

    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if ($check !== false) {
        list($width, $height) = $check;

        if ($width == 320 && $height == 180) {

            try{
                    for ($i = 0; $i <= 6; $i++) {

                         $methodName = "btn154_" . $i;
                         if(isset($datagetarray[$i]) && $datagetarray[$i] != ""){
                            $addtech->$methodName($mysqli, $sessionID, $datagetarray[$i]);
                            }
                    }
                    if($_FILES["file"]["tmp_name"] != ""){
                    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);
                    }
                } catch (Exception $e) {
                    echo "An error occurred: " . $e->getMessage();
                }
                   // echo "122";


        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid image dimensions. Please upload an image with dimensions 320 x 180 pixels.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid file type. Please upload an image.']);
    }

   // echo error_reporting(E_ALL);
    //exit;
}
else{
        $datagetarray = array($frstName, $lstnName, $adr, $cnfnm, $eml, $nic);
                            for ($i = 0; $i <= 5; $i++) {

                         $methodName = "btn154_" . $i;
                         //if(isset($datagetarray[$i]) && $datagetarray[$i] != ""){
                            $addtech->$methodName($mysqli, $sessionID, $datagetarray[$i]);
                           // }
                    }
}
}

//155
if($_POST['buttonValue'] == "155"){
session_start();
$sessionID = $_SESSION['emp'];///////////////////////////////////////////////session///////////////

$addtech = new addTeacher_details();

$result21 = $addtech->appaer_teachers_data($mysqli, $sessionID);

        if ($result21) {
    $row25 = mysqli_fetch_assoc($result21);

    // Return the data as a JSON response
    echo json_encode([
        'frist_name' => $row25['frist_name'],
        'last_name' => $row25['last_name'],
        'address' => $row25['address'],
        'contact_number' => $row25['contact_number'],
        'email' => $row25['email'],
        'NIC' => $row25['NIC'],
        'image' => $row25['image']
    ]);
    
} else {
    // Handle the case where the query fails
    echo json_encode(['error' => 'Query failed']);
}
}

//156
if($_POST['buttonValue'] == "156"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$tech = new teachPasss_change();
$tech->changeThePaas($mysqli, $sessionID, $usrpass);

}

//157 teacher
if($_POST['buttonValue'] == "157"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$tech = new teachPasss_change();
session_start();
$sessionID = $_SESSION['emp'];

$result27 = $tech->changed_data_show($mysqli, $sessionID);

        if ($result27) {
    $row26 = mysqli_fetch_assoc($result27);

    // Return the data as a JSON response
    echo json_encode([
        'user_name' => $row26['user_name']
    ]);
    
} else {
    // Handle the case where the query fails
    echo json_encode(['error' => 'Query failed']);
}
}

//157_2 supper user 
if($_POST['buttonValue'] == "157_2"){
extract($_POST);
session_start();
$sessionID = $_SESSION['emp'];///////////////////////////////////////////////session///////////////
$tech = new teachPasss_change();

$result27 = $tech->changed_data_showsupperuser($mysqli, $sessionID);

        if ($result27) {
    $row26 = mysqli_fetch_assoc($result27);

    // Return the data as a JSON response
    echo json_encode([
        'user_name' => $row26['user_name'],
        'email' => $row26['email']
        
    ]);
    
} else {
    // Handle the case where the query fails
    echo json_encode(['error' => 'Query failed']);
}
}

//157_3 adm
if($_POST['buttonValue'] == "157_3"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$tech_adm = new teachPasss_change();
session_start();
$sessionID = $_SESSION['emp'];
$result27 = $tech_adm->changed_data_showadm($mysqli, $sessionID);

        if ($result27) {
    $row26 = mysqli_fetch_assoc($result27);

    // Return the data as a JSON response
    echo json_encode([
        'user_name' => $row26['username'],
        'email' => $row26['email']
         
    ]);
    
} else {
    // Handle the case where the query fails
    echo json_encode(['error' => 'Query failed']);
}
}

//158
if($_POST['buttonValue'] == "158"){
extract($_POST);
$sessionID = "1";///////////////////////////////////////////////session///////////////
date_default_timezone_set('Asia/Colombo');
$formysqlDate = date('Y-m-d');

$tech_sal = new Tech_salary_gen_detail_day();

$tech_sal->Techsal_158_1($mysqli, $sessionID, $formysqlDate, $TeacherName, $Salary, $desc);
}


//159
if ($_POST['buttonValue'] == "159") {
    extract($_POST);

    // Dynamically set the session ID based on your application logic
    $sessionID = "12"; 

    $techDP = new Tech_salary_gen_detail_day();
    $result159_1 = $techDP->All_select($mysqli);

    $data = array();
    while ($row159 = $result159_1->fetch_assoc()) {
        $data[] = $row159;
    }

    //$mysqli->close(); // Close the database connection

    echo json_encode(array('data' => $data));
}

//160
if ($_POST['buttonValue'] == "160") {
    extract($_POST);

    $techDlt = new Tech_salary_gen_detail_day();
    $techDlt->Info_delete($mysqli, $inforid);

}

//159
/*if ($_POST['buttonValue2'] == "180") {
    extract($_POST);

    $tveling = new tveling();
    $result161 = $tveling->select_trvl_infor_select($mysqli);

    $dataLB = array();
    while ($row161 = $result161->fetch_assoc()) {
        $dataLB[] = $row161;
    }

    echo json_encode(array('data' => $dataLB));
}
*/
/*
if ($_POST['buttonValue2'] == "161") {
    // Handle AJAX request with buttonValue2 equal to 161
    extract($_POST);

    // Perform some server-side logic, fetch data, and encode it as JSON
    $tveling = new tveling();
    $result161 = $tveling->select_trvl_infor_tb($mysqli);

    $dataLB = array();
    while ($row161 = $result161->fetch_assoc()) {
        $dataLB[] = $row161;
    }

    echo json_encode(array('data2' => $dataLB)); // Update the key to 'data'
}
*/

//162
if ($_POST['buttonValue'] == "162") {
    extract($_POST);

    $tveling = new tveling();
    $result162 = $tveling->insert_travel_infor($mysqli, $travelCode, $description);

}

//167
if ($_POST['buttonValue'] == "167") {
    extract($_POST);

    $tveling = new tveling();
    //$trv_date2= $trv_date->format('Y-m-d');
    $trv_date2 = date("Y-m-d", strtotime($trv_date));
    $result162 = $tveling->insert_only_travel_allvance($mysqli, $trav_codeall, $trv_date2, $paymentTrv);

}
/*
//166
if ($_POST['buttonValue'] == "166") {
    extract($_POST);

    $tveling = new tveling();
    $result166 = $tveling->select_join_qry($mysqli);

    $trv_all = array();
    while ($row166 = $result166->fetch_assoc()) {
        $trv_all[] = $row166;
    }

    $mysqli->close(); // Close the database connection

    echo json_encode(array('data' => $trv_all));
}*/

//168
if ($_POST['buttonValue'] == "168") {
    extract($_POST);

    $tveling = new tveling();
    $result168 = $tveling->deleteTravel_infor($mysqli, $inforid);

}
//169
if ($_POST['buttonValue'] == "169") {
    extract($_POST);

    $tveling = new tveling();
    $result168 = $tveling->deleteTravel_allov($mysqli, $inforid);

}
//171
if ($_POST['buttonValue'] == "171") {
    extract($_POST);

    $allowance_paymanet_range = new allowance_paymanet_range();
    $result171 = $allowance_paymanet_range->allowancePriceRange($mysqli, $st_price, $ed_price, $alowPrice);

}
//172
if ($_POST['buttonValue'] == "172") {
    extract($_POST);

    $allowance_paymanet_range = new allowance_paymanet_range();
    $result172 = $allowance_paymanet_range->allowancePriceRangeDelete($mysqli, $id);

}

//173
if ($_POST['buttonValue'] == "173") {
    extract($_POST);
date_default_timezone_set('Asia/Colombo');
$formysqlDate = date('Y-m-d');
    $EA_slary = new allowance_event_paymanet();
    $result173 = $EA_slary->allowance_event_paymanet_insert($mysqli, $TeacherName, $description_allowance, $alowPrice, $formysqlDate);

}
//174
if ($_POST['buttonValue'] == "174") {
    extract($_POST);

 $EA_slary = new allowance_event_paymanet();
$result174 = $EA_slary->allowance_event_paymanet_select($mysqli);
}
//175
if ($_POST['buttonValue'] == "175") {
    extract($_POST);
 $EA_slary = new allowance_event_paymanet();
$result175 = $EA_slary->allowance_event_paymanet_Delete($mysqli, $id);
}

//176
if ($_POST['buttonValue'] == "176") {
    extract($_POST);
    date_default_timezone_set('Asia/Colombo');
    $formysqlDate = date('Y-m-d');
 $loansec = new loansec();
 $result176_1 = $loansec->select_loan_installment_insert_before_check($mysqli, $TeacherName);
 if($result176_1 == "0"){
    $result176 = $loansec->loansec_insert($mysqli, $TeacherName, $description_allowance, $alowPrice, $formysqlDate);
 }
 else{
    echo "1";
 }

}

//177
if ($_POST['buttonValue'] == "177") {
    extract($_POST);
 $loansec = new loansec();
$result177 = $loansec->loansec_Delete($mysqli, $id);
}

//178
if ($_POST['buttonValue'] == "178") {
    extract($_POST);
 $loansec = new loansec();
$result178 = $loansec->loansec_confirmed($mysqli, $id);
}

//179
if ($_POST['buttonValue'] == "179") {
    extract($_POST);
 $EA_slary = new allowance_event_paymanet();
$result175 = $EA_slary->allowance_event_paymanet_conform($mysqli, $id);
}

//184
if ($_POST['buttonValue'] == "184") {
    extract($_POST);
 $supperuser = new supperUser();
$result175 = $supperuser->add_supperUser($mysqli, $spusr, $sppass);
}

//185
if ($_POST['buttonValue'] == "185") {
    extract($_POST);
 $supperuser = new supperUser();
$result175 = $supperuser->delete_supperUser($mysqli, $id);
}

//186
if ($_POST['buttonValue'] == "186") {
    extract($_POST);
        $supperuser = new supperUser();
        $result186 = $supperuser->Permission_add($mysqli, $id, $allValues);
        
        // Return a response if needed
        echo json_encode(['success' => true, 'message' => 'Permissions added successfully']);
    

}

//251 admin password change
if($_POST['buttonValue'] == "251"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$adm = new adimin_and_supper_user();
$adm->changeThePaasadm($mysqli, $sessionID, $usrpass);
}

//252 supper user passowrd change
if($_POST['buttonValue'] == "252"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$spu = new adimin_and_supper_user();
$spu->changeThePaassupperuser($mysqli, $sessionID, $usrpass);
}

//254 supper user passowrd change
if($_POST['buttonValue'] == "254"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
session_start();
$sessionID = $_SESSION['emp'];
$spu = new adimin_and_supper_user();
$spu->addemailadm($mysqli, $sessionID, $myEmail);
}

//255 supper user passowrd change
if($_POST['buttonValue'] == "255"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
session_start();
$sessionID = $_SESSION['emp'];
$spu = new adimin_and_supper_user();
$spu->addemailspu($mysqli, $sessionID, $myEmail);
}

//256 supper user passowrd change
if($_POST['buttonValue'] == "256"){
extract($_POST);

$spu = new adimin_and_supper_user();
$spu->spuPermissionDelete($mysqli, $id);
}

//257 supper user passowrd change
if($_POST['buttonValue'] == "257"){
extract($_POST);
//echo $id;
$spu = new adimin_and_supper_user();
echo $spu->spuPermissionDelete($mysqli, $id);
}

//257 supper user passowrd change
if($_POST['buttonValue'] == "257"){
extract($_POST);
//echo $id;
$spu = new adimin_and_supper_user();
echo $spu->spuPermissionDelete($mysqli, $id);
}

//260 supper user passowrd change
if($_POST['buttonValue'] == "260"){
extract($_POST);
//echo $id;
$spu = new adimin_and_supper_user();
$spu->confirmedMonthly_salary($mysqli, $id);
}

//261 supper user passowrd change
if($_POST['buttonValue'] == "261"){
extract($_POST);
$spu = new ForgetpassSec($mysqli, $eml);
$spu->Check_and_code_send();
}

//300 summary_schema_add.php
if($_POST['buttonValue'] == "btn_300"){
extract($_POST);
$spu = new summery_schema($mysqli);
$spu->Insert_summery_schema($Date_M, $vocabulary, $READING, $CGC, $exercs_poems, $IOLNSC, $INSTRCTNS, $WARNING);
}


//301 Delete summary schema
if($_POST['buttonValue'] == "btn301"){
extract($_POST);
$spu = new summery_schema($mysqli);
$spu->delete_the_summery_schema($summery_id);
}

//303 Add staff Comment
if($_POST['buttonValue'] == "btn_303"){
extract($_POST);
$spu = new summery_schema($mysqli);
$spu->update_the_staff_comment($summerize_id, $comment, $colid);
}

//305 Add Teacher Comment
if($_POST['buttonValue'] == "btn_305"){
extract($_POST);
$spu = new summery_schema($mysqli);
$spu->update_the_teacher_comment($summerize_id, $comment, $colid);
}

//307 Add Teacher Action
if($_POST['buttonValue'] == "btn_307"){
extract($_POST);
$spu = new summery_schema($mysqli);
$spu->update_the_teacher_Process_call($summerize_id, $process_cal, $colid);
}

//312 Loan section
if($_POST['buttonValue'] == "btn_312"){
extract($_POST);
 $loansec = new loansec();
$loansec->Add_installment_loan_section($mysqli, $dataToInsert);
}

//315 Loan section
if($_POST['buttonValue'] == "btn_315"){
extract($_POST);
 $loansec = new loansec();
$loansec->Add_installment_loan_section($mysqli, $installment_id, $installment_date, $installment_amount, $installment_emiId);
}

//btn_320 employee is all loan settled
if($_POST['buttonValue'] == "btn_320"){
extract($_POST);
 $loansec = new loansec();
$loansec->Setteled_the_all_loan_of_employee($mysqli, $loanId);
}

//btn_323 change a password of techer by admin
if($_POST['buttonValue'] == "btn_323"){
extract($_POST);
$tech = new teachPasss_change();
$sessionID = $teacher_of_id;
$usrpass = $new_password;
$tech->changeThePaas($mysqli, $sessionID, $usrpass);
}

//324 change a password of supper user by admin
if($_POST['buttonValue'] == "btn_324"){
extract($_POST);
//$sessionID = "12";///////////////////////////////////////////////session///////////////
$spu = new adimin_and_supper_user();
$sessionID = $staff_of_id;
$usrpass = $new_password;
$spu->changeThePaassupperuser($mysqli, $sessionID, $usrpass);
}
// change the salary band of edit
if ($_POST['buttonValue'] == "btn_330") {
    extract($_POST);

    $allowance_paymanet_range = new allowance_paymanet_range();
    $allowance_paymanet_range->Change_allowancePriceRange($mysqli, $range_id, $column_id, $New_condition_allowance);

}

?>