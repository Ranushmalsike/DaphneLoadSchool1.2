<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol102"){
         ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
     // echo $_SESSION['code_'.$i];
      //continue
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
    <title><?php $vblsection2->title(); ?> </title>
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
    <script src="assets/js/msgBox.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Magnific Popup CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- table -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!------------------->
    <!-- data table -->
    <!-- DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">
    </script>
    <!-- DataTables Buttons CSS and JS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


    <style>
        .iconSize {
            font-size: 10px;
        }

        .modal-dialog {
            max-width: 90%;
        }

        .modal-dialog-slideout {
            min-height: 100%;
            margin: 0 0 0 auto;
            background: #fff;
        }

        .modal.fade .modal-dialog.modal-dialog-slideout {
            -webkit-transform: translate(100%, 0) scale(1);
            transform: translate(100%, 0) scale(1);
        }

        .modal.fade.show .modal-dialog.modal-dialog-slideout {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            display: flex;
            align-items: stretch;
            -webkit-box-align: stretch;
            height: 100%;
        }

        .modal.fade.show .modal-dialog.modal-dialog-slideout .modal-body {
            overflow-y: auto;
            overflow-x: hidden;
        }

        .modal-dialog-slideout .modal-content {
            border: 0;
        }

        .modal-dialog-slideout .modal-header,
        .modal-dialog-slideout .modal-footer {
            height: 4rem;
            display: block;
        }
    </style>
    <script>
        $(document).ready(function () {
            // msg
            var msgbxInstance = new msgbx();
            //   $('.range_allowance').DataTable();
            $('.range_allowance').DataTable({
                "pagingType": "full_numbers",
                "pageLength": 5,
                "searching": true,
                "fixedHeader": true,
                "responsive": true,
                "scrollX": true,
                order: [
                    [0, 'desc']
                ],
                paging: true,
                scrollCollapse: true,
                scrollY: '500px',
                dom: 'Blfrtip',
                buttons: [{
                        extend: 'pdf',
                        bold: 'true',
                        fontSize: '15',
                        title: 'Daphne Lord School (Registered Admin Staff)',
                        subtitle: 'Line 2 of the subtitle',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            },
                        }
                    },
                    'copy', 'csv', 'excel', 'print'
                ]
            });
            // Handle delete button click event
            $('.deleteBtn_info').click(function () {
                var buttonValue = "185";
                var table = $(this).data('table');
                var id = $(this).data('id');
                // Send an AJAX request to delete the record
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to delete this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'backCode/front_backend.php',
                            method: 'POST',
                            data: {
                                buttonValue: buttonValue,
                                table: table,
                                id: id
                            },
                            success: function (response) {
                                // Handle the response from the server
                                msgbxInstance.okCompleted();
                            }
                        });
                    }
                });
            });
            //add permission 
            $('.permission_info').click(function () {
                var id = $(this).data('id');
                $('#userid').val(id);
            });
            //184 insert 
            $('#add_sppusr184').click(function () {
                var buttonValue = $(this).val();
                var spusr = $('#sppuser').val();
                var sppass = $('#passwordField').val();
                if ((spusr == "" && sppass == "") || (spusr == "" || sppass == "")) {
                    msgbxInstance.nullvale();
                } else {
                    $.ajax({
                        url: 'backCode/front_backend.php',
                        type: 'POST',
                        data: {
                            buttonValue: buttonValue,
                            spusr: spusr,
                            sppass: sppass
                        },
                        success: function (data) {
                            // alert(data);
                            msgbxInstance.okCompleted();
                        }
                    });
                }
            });
            //checkbox
            //const addButton = document.getElementById("getSelectedValues");
            const selectedValues = [];

            $('#getSelectedValues').click(function () {
                // Get the id value
                const id = $('#userid').val();

                // Clear the array before adding new values
                selectedValues.length = 0;

                // Loop through checkboxes and add unique values to the array
                $('input[type=checkbox]:checked').each(function () {
                    const value = $(this).val();
                    if (!selectedValues.includes(value)) {
                        selectedValues.push(value);
                    }
                });

                // Use AJAX to send data to the server
                $.ajax({
                    type: 'POST',
                    url: 'backCode/front_backend.php',
                    data: {
                        buttonValue: "186",
                        id: id,
                        allValues: selectedValues
                    },
                    success: function (response) {
                        msgbxInstance.okCompleted();
                        // Handle the response from the server
                        //console.log(response);
                        // You can perform additional actions if needed
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });

            /*
                >>> Change the password of selected supper user
            */
            $('#example').on('click', 'td', function () {

                // Get the content of the clicked cell
                //var loanId = $(this).closest('tr').find('td:first').text();
                var id_staff = $(this).closest('tr').find('td:eq(0)').text();
                var name_of_staff = $(this).closest('tr').find('td:eq(1)').text();
                var cellNumber = $(this).index();
                if (cellNumber == 3) {

                } else {
                    $('#supper_id').val(id_staff);
                    $('#name_of_supper').val(name_of_staff);
                    $('#editEmployeeModal').modal('show');
                }
            });

            /*
                >>> Model Cancel
            */
            $('#cancel_the_password, .close').on('click', function () {
                $('#editEmployeeModal').modal('hide');
            });
            /*
                >>> change the password of teacher in database
                ** change_the_password
            */
            $('#change_the_password').click(function (e) {
                e.preventDefault();
                var buttonValue = $(this).val();
                var staff_of_id = $('#supper_id').val();
                var new_password = $('#password_of_new').val();
                //alert(buttonValue);
                if (new_password == null || new_password == "") {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Empty Password!",
                        footer: ''
                    });


                } else {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You want to change this password",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: "backCode/front_backend.php",
                                data: {
                                    buttonValue: buttonValue,
                                    staff_of_id: staff_of_id,
                                    new_password: new_password
                                },
                                success: function (response) {
                                    msgbxInstance.okCompleted();
                                    //alert(response);
                                }
                            });

                        }
                    });
                }
            });
        });
    </script>
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
            <h1>Supper user</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Administration Hub</li>
                    <li class="breadcrumb-item active">Supper User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add supper user</h5>
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Create Supper User</span></a>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container-xl">
                        <div class="row">
                            <h4>Supper user</b></h2>
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                </div>
                        </div>
                    </div>
                    <table id="example" class="range_allowance table display table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>email</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                // Output employees data
                                $supperUser = new supperUser();
                                $result172 = $supperUser->select_supperUser($mysqli);
                                $count = 0;
                                while ($row172 = mysqli_fetch_assoc($result172)) {
                                    echo "<tr>
                                                <td>{$row172['empid']}</td>
                                                <td>{$row172['user_name']}</td>
                                                <td>{$row172['email']}</td>
                                                <td> <img src='backCode/uploadImage/{$row172['Imgsppusr']}' height='80%' width='80%' /></td>
                                                <td>
                                                <button class='deleteBtn_info btn btn-danger btn-sm' data-table='employees' data-id='{$row172['empid']}' style='fontSize: 10px;'><i class='iconSize bi bi-trash'  style='font-size: 12px;'></i></button>
                                                
                                                <button type='button' class='permission_info btn btn-info btn-sm' data-toggle='modal' data-target='#ModalSlide' data-id='{$row172['empid']}'><i class='iconSize bi bi-sliders' style='font-size: 12px;'></i></button>
                                               
                                                </td>
                                            </tr>";
                                    $count++;
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="addEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Register Supper user</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger font-weight-bold">Now that you're entering your username and password,
                                keep in mind that you'll need to log in again using the same credentials as a supper
                                user.
                                You can change your password after logging in.</p>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="sppuser" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="passwordField">
                                <button id="showPassword" class="btn btn-light">Show/Hide</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" id="add_sppusr184" value="184">Add</button>
                            <button class="btn btn-default" data-dismiss="modal" id="teacher_cancel_147"
                                value="147">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- permission_info -->
            <div class="modal fade" id="ModalSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-slideout" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title align-right" id="exampleModalLabel">Permission</h5>

                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" class="form-control" id="userid" disabled>
                            </div>

                            <div class="row">
                                <h5>Permission</h5>
                                <div class="row">
                                    <h6>Main Page Permission</h6>
                                    <hr>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol103"
                                                id="flexCheckDefault_pg1">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Modernization 1
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol104"
                                                id="flexCheckDefault_pg2">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Modernization 2
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol105"
                                                id="flexCheckDefault_pg3">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Modernization 3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol106"
                                                id="flexCheckDefault_pg4">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Modernization 4
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol107"
                                                id="flexCheckDefault_pg5">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Add event
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <h6>Supper User</h6>
                                    <hr>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol100"
                                                id="flexCheckDefault_hmpg">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Dashboard
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol101"
                                                id="flexCheckDefault_ownprlsec">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Change Password and add email
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol108"
                                                id="flexCheckDefault_ownprlpasssec">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Enlist Educator
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol109"
                                                id="flexCheckDefault_addSubj">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Establish Subject And Schema
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol110"
                                                id="flexCheckDefault_addclass">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Establish Class
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol113"
                                                id="flexCheckDefault_addtimetbl">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Establish Class
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol111"
                                                id="flexCheckDefault_addTeacher">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Arrange Timetable
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol117"
                                                id="flexCheckDefault_lookTeacheratten">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Teacher Details
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol112"
                                                id="flexCheckDefault_addmonthly_salary_range_allownace">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Define Hourly Pay Criteria
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol121"
                                                id="flexCheckDefault_lookAllTecher_salary">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Look All Teachers Salary All month
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol129"
                                                id="flexCheckDefault_Report">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Report
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol113"
                                                id="flexCheckDefault_add_daySalary_gen">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Transport Benefit Criteria
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol114"
                                                id="flexCheckDefault_add_month_salary_gen">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Define Salary Bands
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol115"
                                                id="flexCheckDefault_add_transport_sec">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Detail Salary Criteria (Events/Extras)
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol125"
                                                id="flexCheckDefault_add_monthly_salary_event">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Teacher Pay
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol116"
                                                id="flexCheckDefault_loan_sec">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Credit Section
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol120"
                                                id="flexCheckDefault_add_monthly_salary_event">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Calculation
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-check-input" type="checkbox" value="dpnCol127"
                                                id="flexCheckDefault_Summery_Maintain">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Summery Maintain
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" id="getSelectedValues" value="186">Add</button>

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->

    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Change the Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Staff Code</label>
                                    <input type="text" class="form-control" id="supper_id" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name_of_supper" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Change the password</label>
                            <input type="text" name="" id="password_of_new" class="form-control">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" id="change_the_password" value="btn_324">Update</button>
                        <button class="btn btn-default" data-dismiss="modal" id="cancel_the_password"
                            value="302">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
</body>

</html>

<?php
/*
  }
  }


}
else{
  header("Location: ../index.php");

}*/
?>
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
    <div style="position: center;">
        <h1>404</h1>
    </div>
</body>

</html>
<?php
}
else{
  header("Location: ../index.php");
}
?>