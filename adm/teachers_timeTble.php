<?php


session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol118"){
         ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
     // echo $_SESSION['code_'.$i];
      //continue
//require_once('db-connect.php');

require_once '../include/errorShow.php';
require_once '../qry/daphne_variable.php';
require_once '../include/front_header.php';
require_once '../include/front_footer.php';
require_once '../include/dbcon.php';
require_once '../qry/qry.php';

//error handle
$erro = new errodisplay();
//$error->display();


// create object
$vblsection2 = new  daphnescV();
$adm_v2 = new admpanel();
$linkAdm_head = new adm_head();
$linkAdm_footer = new admfooter();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

         <link href="assets/img/daphne.jpeg" rel="icon">
    <title><?php $vblsection2->title(); ?>  </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Magnific Popup CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- table -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!------------------->

    <!-- Calender -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/fullcalendar/lib/main.min.css">

    <script src="assets/fullcalendar/lib/main.min.js"></script>
    <!-- Calender end -->

    <!-- Magnific Popup CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }

        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>



</head>

<body>

    <!-- ======= Header ======= -->
    <?php
      
      $linkAdm_head->adm_header_full();

    ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php
      $linkAdm_head->sideheader();

    ?>
    <!-- End Sidebar-->


    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Time Arrangement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Establish Section</li>
                    <li class="breadcrumb-item active">Time Arrangement</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container py-5" id="page-container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="cardt rounded-0 shadow">
                            <div class="card-header bg-gradient bg-primary text-light">
                                <h5 class="card-title">Session Tranfer</h5>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <form action="#" id="schedule-form">
                                        <input type="hidden" name="id" value="" id="trnf_id_trn">

                                        <div class="form-group mb-2">
                                            <label for="tblID" class="control-label">ID</label>
                                            <input type="text" class="form-control form-control-sm rounded-0"
                                                name="tblID" id="tblID" disabled>

                                        </div>


                                        <div class="form-group mb-2">
                                            <label for="end_datetime" class="control-label">Schedule Date</label>
                                            <input type="date" class="form-control form-control-sm rounded-0"
                                                name="titile_datetime" id="titile_datetime" disabled>

                                        </div>


                                        <div class="form-group mb-2">
                                            <label for="starttime" class="control-label">Start Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0"
                                                name="starttime" id="starttime" disabled>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="endtime" class="control-label">End Time</label>
                                            <input type="time" class="form-control form-control-sm rounded-0"
                                                name="endtime" id="endtime" disabled>
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="classfrmid" class="control-label">Class Name</label>
                                            <input type="text" class="form-control form-control-sm rounded-0" name="clz"
                                                id="clz" disabled>
                                        </div>


                                        <div class="form-group md-2">
                                            <label for="description" class="control-label">Subject and Schema</label>
                                            <!-- Your HTML Select2 dropdown -->
                                            <input type="text" class="form-control form-control-sm rounded-0" name="sbj"
                                                id="sbj" disabled>
                                        </div>

                                        <div class="form-group md-2">
                                            <label for="description" class="control-label">From Teacher</label>
                                            <!-- Your HTML Select2 dropdown -->
                                            <input type="text" class="form-control form-control-sm rounded-0" name="fromteacher"
                                                id="fromteacher" disabled>
                                        </div>

                                        <div class="form-group md-2">
                                            <label for="description" class="control-label">To Select Teacher</label>
                                            <!-- Your HTML Select2 dropdown -->
                                            <select class="selectTeacher form-control form-control-sm rounded-0"
                                                name="TeacherName" id="TeacherName" placeholder="select Teacher">
                                                <!-- Options will be dynamically added here -->
                                                <?php 
                                                        $TeachersecEmp1 = new TeachersecEmp1();
                                                        $result5 = $TeachersecEmp1->check_select_check($mysqli);

                                                        while ($row5 = $result5->fetch_assoc()) {
                                                            echo '<option data-image="' . $row5['image'] . '" value="'.$row5['empid'].'">&nbsp;&nbsp;'. $row5['frist_name'] . '&nbsp;&nbsp;'. $row5['last_name'] .
                                                                '</option>';
                                                        }
                                                    ?>
                                            </select>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-center">
                                    <button class="btn btn-primary" id="tranfertech_153" value="153"
                                        data-id="">Save</button>
                                    <button class="btn btn-default border btn-sm rounded-0" type="reset"
                                        form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-8">
                        <div id="calendar"></div>
                    </div>

                </div>
            </div>
            <!-- Event Details Modal -->
            <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-header rounded-0">
                            <h5 class="modal-title">Schedule Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body rounded-0">
                            <div class="container-fluid">
                                <dl>
                                    <dt class="text-muted">Title</dt>
                                    <dd id="title" class="fw-bold fs-4"></dd>
                                    <table>
                                        <tr class="table-danger">
                                            <td>
                                                <dt class="text-muted">Start Time</dt>
                                                <dd id="stTime" class=""></dd>
                                            </td>

                                            <td>
                                                <dt class="text-muted">End Time</dt>
                                                <dd id="edTime" class=""></dd>
                                            </td>
                                        <tr class="table-success">
                                            <td>
                                                <dt class="text-muted">Class name</dt>
                                                <dd id="ClassName" class=""></dd>
                                            </td>

                                            <td>
                                                <dt class="text-muted">Subject</dt>
                                                <dd id="Subjectname" class=""></dd>
                                            </td>
                                        </tr>

                                    </table>
                                    <hr>
                                    <table>
                                        <tr class="table-warning">
                                            <td>
                                                <dt class="text-muted">First Name</dt>
                                                <dd id="fstname" class=""></dd>
                                            </td>

                                            <td>
                                                <dt class="text-muted">Last Name</dt>
                                                <dd id="lstname" class=""></dd>
                                            </td>

                                            <td height='40%' width='30%'>

                                                <dd id="profile2" class=""></dd>

                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr class="table-light">
                                            <dt>Session Transfer</dt>
                                        </tr>
                                        <tr class="table-info">
                                            <td>
                                                <dt class="text-muted">First Name</dt>
                                                <dd id="fstname_trsn" class=""></dd>
                                            </td>

                                            <td>
                                                <dt class="text-muted">Last Name</dt>
                                                <dd id="lstname_tran" class=""></dd>
                                            </td>

                                            <td height='40%' width='30%'>

                                                <dd id="profile2_tran" class="">
                                                </dd>
                                            </td>
                                        </tr>
                                    </table>

                                </dl>
                            </div>
                        </div>
                        <div class="modal-footer rounded-0">
                            <div class="text-end">
                                <button type="button" class="btn btn-success btn-sm rounded-0" id="Confirm_My_session"
                                    data-id="">Confirm My session</button>

                                <button type="button" class="btn btn-warning btn-sm rounded-0" id="Transfersession"
                                    data-id="">Transfer My Session</button>

                                <!-- <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" 
                                     data-id="">Delete</button> -->

                                <button type="button" class="btn btn-secondary btn-sm rounded-0"
                                    data-bs-dismiss="modal" >Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Event Details Modal -->

        </section>

    </main><!-- End #main -->




    <!-- ======= Footer ======= -->
    <?php
          $linkAdm_footer->admfooterfn();
        ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <?php 
    $ssin = $_SESSION['emp'];
$timeTbleTb_teacherOnly = new timeTbleTb_teacherOnly();
$result10 = $timeTbleTb_teacherOnly->check_timeTbleTb($mysqli, $ssin);
$sched_res = [];
foreach($result10->fetch_all(MYSQLI_ASSOC) as $row10){
    $row10['Sheduldatepg'] = date("F d, Y",strtotime($row10['Sheduldate']));
    $row10['sdate'] = date("h:i A",strtotime($row10['stTime']));
    $row10['edate'] = date("h:i A",strtotime($row10['endTime']));
    $sched_res[$row10['timeTbID']] = $row10;
}
?>
    <script>
        var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
        var scheds2 = $.parseJSON('<?= json_encode($ssin) ?>')
    </script>
    <script>
        function formatState(state) {
            if (!state.id) {
                return state.text;
            }

            var baseUrl = "backCode/uploadImage";
            var $state = $(
                '<span><img src="' + baseUrl + '/' + state.element.dataset.image +
                '" class="img-flag" height="30%" width="20%" /> ' + state.text + '</span>'
            );

            return $state;
        }


        $(document).ready(function () {

            // disable date
            var inputDate = document.getElementById('titile_datetime');
            var currentDate = new Date().toISOString().split('T')[0];
            inputDate.setAttribute('min', currentDate);
            // disable date end


            ////////////select2/////////
            $('.selectClass').select2({});
            $('.selectSubject').select2({});
            $('#TeacherName').select2({
                templateResult: formatState

            });
            //////select2 end///////////////

            ////////////////153//////////////////////////
            $("#tranfertech_153").on("click", function () {
                var buttonValue = $(this).val();
                var tblid = $('#tblID').val();
                var TeacherName = $('#TeacherName').val();
                var getemid = scheds2;
               // alert(getemid);
               //alert(tblid +' '+ TeacherName + ' ' + getemid);

                if (tblid == "") {
                    Swal.fire({
                        position: "top-end",
                        icon: "warning",
                        title: "empty values",
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    $.ajax({
                        type: "POST",
                        url: "backCode/front_backend.php", // Your PHP script URL
                        data: {
                            buttonValue: buttonValue,
                            tblid: tblid,
                            TeacherName: TeacherName,
                            getemid: getemid
                        }, // Data to be sent to the server
                        success: function (response) {
                            //alert(response);
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Your work has been saved",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            location.reload();
                        }
                    });

                }
            });

        });
    </script>
    <script src="assets/js/teacherScript.js"></script>
</body>

</html>
<?php
  }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="position: center;"><h1>404</h1></div>
</body>
</html>
<?php
}
else{
  header("Location: ../index.php");
}
?>