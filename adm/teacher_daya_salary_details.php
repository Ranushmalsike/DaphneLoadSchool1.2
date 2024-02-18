<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol112"){
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

    <script>
        $(document).ready(function () {
            // msg
            var msgbxInstance = new msgbx();

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
            $('#TeacherName').select2({
                templateResult: formatState
            });
            //table
            //var buttonValue = "159";
            $('#example').DataTable({
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
                        title: 'Daphne Lord School (Per Hour Salary Information)',
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
            // Delete
            $('.deleteBtn_info').click(function () {
                var buttonValue = "160";
                var table = $(this).data('table');
                var id = $(this).data('id');
                //var inforid = data['DSlGen_detail_id'];
                // alert();
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
                            type: 'POST',
                            data: {
                                buttonValue: buttonValue,
                                inforid: id
                            },
                            success: function (response) {
                                // alert(response);
                                table.ajax.reload();
                            }
                        });
                         msgbxInstance.okCompleted();
                    }
                });
            });
            //158 insert
            $('#daysalrysave_158').click(function () {
                var buttonValue = $(this).val();
                var TeacherName = $('#TeacherName').val();
                var Salary = $('#Salary').val();
                var desc = $('#desc').val();
                if (Salary == "") {
                    msgbxInstance.nullvale();
                } else {
                    $.ajax({
                        url: 'backCode/front_backend.php',
                        type: 'POST',
                        data: {
                            buttonValue: buttonValue,
                            TeacherName: TeacherName,
                            Salary: Salary,
                            desc: desc
                        },
                        success: function (data) {
                            msgbxInstance.okCompleted();
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
            <h1>Salary Information</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">administration Hub</li>
                    <li class="breadcrumb-item active">Salary Information</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Salary Information</h5>
                            <!-- Horizontal Form -->
                            <div class="form-group mb-2">
                                <label for="inputEmail3" class="col-sm-5 col-form-label">Select Teacher</label>
                                <select class="selectTeacher form-control rounded-0" name="TeacherName" id="TeacherName"
                                    placeholder="select Teacher">
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
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Per hour salary (1H =
                                LKR)</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">LKR</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)"
                                    id="Salary">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword3" class="col-sm-5 col-form-label">Description</label>
                                <textarea name="desc" id="desc" class="form-control"></textarea>
                            </div>
                            <div class="text-center">
                                <button id="daysalrysave_158" class="btn btn-primary" value="158">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                    <h2>Salary Information</b></h2>

                    <table id="example" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Salary Base</th>
                                <th>Published Date</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                        // Output employees data
                                        $techDP = new Tech_salary_gen_detail_day();
                                        $result159_1 = $techDP->All_select($mysqli);
                                        $count = 0;
                                        while ($row159 = mysqli_fetch_assoc($result159_1)) {
                                            echo "<tr>
                                                        <td>{$row159['DSlGen_detail_id']}</td>
                                                        <td>{$row159['frist_name']}</td>
                                                        <td>{$row159['last_name']}</td>
                                                        <td>{$row159['salary_base']}</td>
                                                        <td>{$row159['published_date']}</td>
                                                        <td>{$row159['description']}</td>
                                                        <td><button class='deleteBtn_info btn btn-danger btn-sm' data-table='employees' data-id='{$row159['DSlGen_detail_id']}'>Delete</button></td>
                                                    </tr>";
                                            $count++;
                                        }
                                        ?>
                        </tbody>
                    </table>

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