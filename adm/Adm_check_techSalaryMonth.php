<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol125"){
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
                        title: 'Daphne Lord School (Teachers Salary)',
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
                var table = $(this).data('table');
                var id = $(this).data('id');
                var dateofhime = $(this).data('id2');
                var url = "Calculation_salry.php?id=" + id + "&dateofhime=" + dateofhime;
                window.open(url, "_blank");

                //Calculation_salry.php

            });

            $(".confirmed").click(function (e) {
                e.preventDefault();
                var buttonValue = "260";
                var id = $(this).data('id');

                $.ajax({
                    type: "POST",
                    url: "backCode/front_backend.php",
                    data: {
                        buttonValue: buttonValue,
                        id: id
                    },
                    success: function (response) {
                        msgbxInstance.okCompleted();
                    }
                });

            });

            //171 insert
            /* $('#total_salary_add_171').click(function () {
                 var buttonValue = $(this).val();
                 var st_price = $('#st_price').val();
                 var ed_price = $('#ed_price').val();
                 var alowPrice = $('#alowPrice').val();
                 if ((st_price == "" && ed_price == "" && alowPrice == "") || (st_price == "" ||
                         ed_price == "" || alowPrice == "")) {
                     msgbxInstance.nullvale();
                 } else {
                     $.ajax({
                         url: 'backCode/front_backend.php',
                         type: 'POST',
                         data: {
                             buttonValue: buttonValue,
                             st_price: st_price,
                             ed_price: ed_price,
                             alowPrice: alowPrice
                         },
                         success: function (data) {
                             msgbxInstance.okCompleted();
                         }
                     });
                 }
             });*/
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
            <h1>Teacher Salary</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Administrator Hub</a></li>
                    <li class="breadcrumb-item active">Teacher Pay</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <!-- Sales Card -->
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <table id="example" class="range_allowance table display table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Year & Month</th>
                                        <th>Progress</th>
                                        <th>Salary (LKR)</th>
                                        <th>Total Salary Allowance (LKR)</th>
                                        <th>Look Deep</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                        $myActivityTech = new myActivityTech();
                                                        $result173 = $myActivityTech->selectMyActivity_forAdimn($mysqli);
                                                        $count = 0;
                                                        while ($row173 = mysqli_fetch_assoc($result173)) {
                                                        echo "<tr>
                                                        <td>{$row173['mLid']}</td>
                                                        <td>{$row173['fname']}</td>
                                                        <td>{$row173['lname']}</td>
                                                        <td>{$row173['mldate']}</td>
                                                        <td><progress value='{$row173['completedTask']}' max='{$row173['Task']}'></progress> <p>({$row173['completedTask']} / {$row173['Task']}) </p></td>
                                                        <td>{$row173['mlsalary']}</td>
                                                        <td>{$row173['bonus']}</td>
                                                        <td>
                                                        <button class='deleteBtn_info btn btn-info btn-sm' data-table='employees' data-id='{$row173['empid']}' data-id2='{$row173['mldate']}'><i class='bi bi-file-spreadsheet-fill' style='font-size: 12px;'></i></button>
                                                        "; 
                                                        if($_SESSION['emp'] == "1"){ 
                                                            if($row173['Msub_confirm'] == 1){ 
                                                                echo "<p><b>Confirmed</b></p>";
                                                            
                                                            }
                                                            else{
                                                            echo "<button class='confirmed btn btn-warning btn-sm' data-table='employees' data-id='{$row173['mLid']}'><i class='bi bi-check-square-fill' style='font-size: 12px;'></i></button>";
                                                                }
                                                            }
                                                        else{
                                                            if($row173['Msub_confirm'] == 1){ 
                                                                echo "<p><b>Ok</b></p>";
                                                            }
                                                            else{
                                                                echo "<p><b>Pending</b></p>";
                                                            
                                                                }
                                                        }
                                                        echo "
                                                </td> 
                                                </tr>";
                                            $count++;
                                        }
                                        ?>
                                </tbody>
                            </table>

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