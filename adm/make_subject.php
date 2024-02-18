<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol109"){
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
    <!------------------->
    <script>
        $(document).ready(function () {
            class MyClass {
                constructor(element) {
                    this.element = element;
                }
                // Function with parameters
                showMessage(message) {
                    alert(message);
                }
                // empty
                showAlertnull() {
                    Swal.fire({
                        position: "top-end",
                        icon: "warning",
                        title: "empty values",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
                // success
                showAlertcompleted() {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "your task saved",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
            const myObject = new MyClass();
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();
            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function () {
                if (this.checked) {
                    checkbox.each(function () {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function () {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function () {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
            //   $('.range_allowance').DataTable();
            $('.SBJsec').DataTable({
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
                        title: 'Daphne Lord School (Subject And Schema Information)',
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
            ///////////////////////////////////////////////////////////
            //btn 140
            $("#subject_add_140").click(function () {
                var buttonValue = $(this).val();
                var subject_name = $('#subject_name').val();
                //Swal.fire(title);
                if (subject_name != "") {
                    $.ajax({
                        type: "POST",
                        url: "backCode/front_backend.php", // Your PHP script URL
                        data: {
                            buttonValue: buttonValue,
                            subject_name: subject_name
                        }, // Data to be sent to the server
                        success: function (response) {
                            // Display the response in the result div
                            //Swal.fire(response);
                            //$("#show_data_event").html(response);
                            myObject.showAlertcompleted(response);
                            location.reload();
                        }
                    });
                } else {
                    myObject.showAlertnull();
                }
            });
            /////////////////////set the button click after value input ////////////
            $('.edit').on('click', function () {
                var classId = $(this).attr('value');
                $('#Edit_subject_id').val(classId);
            });
            ///////////////////////////////////////////////////////////////////////
            //btn 142
            $('#subject_Edit_142').on('click', function () {
                var buttonValue = $(this).val();
                var Edit_subject_id = $('#Edit_subject_id').val();
                var Edit_subject = $('#Edit_subject').val();
                $.ajax({
                    type: "POST",
                    url: "backCode/front_backend.php", // Your PHP script URL
                    data: {
                        buttonValue: buttonValue,
                        Edit_subject_id: Edit_subject_id,
                        Edit_subject: Edit_subject
                    }, // Data to be sent to the server
                    success: function (response) {
                        // Display the response in the result div
                        //Swal.fire(response);
                        //$("#show_data_event").html(response);
                        myObject.showAlertcompleted(response);
                        location.reload();
                    }
                });
            });
            //btn 139
            $('.delete').on('click', function () {
                var sbid = $(this).attr('value');
                var buttonValue = "btn_139";
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "backCode/front_backend.php", // Your PHP script URL
                            data: {
                                buttonValue: buttonValue,
                                sbid: sbid
                            }, // Data to be sent to the server
                            success: function (response) {
                                // Display the response in the result div
                                //Swal.fire(response);
                                //$("#show_data_event").html(response);
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your value has been deleted.",
                                    icon: "success"
                                });
                                location.reload();
                            }
                        });
                    }
                });
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
            <h1>Subject And Schema</h1>
            <nav>
                <ol class="breadcrumb">
                   
                    <li class="breadcrumb-item">Establish Section</li>
                    <li class="breadcrumb-item active">Subject And Schema</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-5">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                            class="material-icons">&#xE147;</i> <span>Add New subject and schema</span></a>
                            <hr>
                </div>
                <div class="col-lg-7">
                    <table id="example" class="SBJsec table display table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>subject Code</th>
                                <th>subject and schema</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                            $sujectCheck = new sujectCheck();
                                            $result2 = $sujectCheck->check_select($mysqli);
                                           // echo "no";
                                            $idGen = 1;
                                            while ($row = $result2->fetch_assoc()) {
                                        echo "<tr>
                                            <td>" . $idGen++ . "</td>
                                            <td>{$row['subjetid']}</td>
                                            <td>{$row['subject_name']}</td>
                                            <td>
                                                <a href='#editEmployeeModal' class='edit' data-toggle='modal' value='{$row['subjetid']}' id='EditSubject_138'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                                                <a href='#deleteEmployeeModal' class='delete'  value='{$row['subjetid'] }' id='DeleteSubject_139'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
                                            </td>
                                        </tr>";
                                            }
                                        ?>
                        </tbody>
                    </table>
                    <!-- Edit Modal HTML -->
                    <div id="addEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add subject and schema</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>subject and schema</label>
                                        <input type="text" class="form-control" id="subject_name" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" id="subject_add_140" value="140">Add</button>
                                    <button class="btn btn-default" data-dismiss="modal" id="subject_cancel_141"
                                        value="141">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit subject and schema</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Subject ID</label>
                                            <input type="text" class="form-control" id="Edit_subject_id" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>subject and schema</label>
                                            <input type="text" class="form-control" id="Edit_subject">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" id="subject_Edit_142"
                                            value="142">Update</button>
                                        <button class="btn btn-default" data-dismiss="modal" id="subject_cancel_143"
                                            value="143">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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