<?php


session_start();
// if($_SESSION['emp'] != ""){
// //echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
// $countVRB = $_SESSION['makeSessionVR'];
//   for ($i=1; $i <= $countVRB; $i++) { 
//      if($_SESSION['code_'.$i] == "dpnCol120"){
//          ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
//      // echo $_SESSION['code_'.$i];
//       //continue

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
        .table-container {
            width: 30%;
            /* Set the width of the table container */
            margin: auto;
            /* Center the table container */
        }

        table td {
            text-align: left;
        }

        tr.border-dark {
            border: 1px solid #000;
            /* You can customize the color and thickness */
        }

        tr.border-dark td {
            border: 1px solid #000;
            /* You can customize the color and thickness */
        }
    </style>
    <script>
        $(document).ready(function () {
            // msg
            var msgbxInstance = new msgbx();
            // disable date
            /*  var inputDate = document.getElementById('trv_date');
              var currentDate = new Date().toISOString().split('T')[0];
              inputDate.setAttribute('min', currentDate);*/
            // disable date end
            //select2
            /*$('.trav_codeall').select2({});*/
            /*
            !1st table data start
            */
            $('#spupermsion').DataTable({
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
                        title: 'Daphne Collage (Admin Staff permission)',
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
            $('#techer').DataTable({
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
                        title: 'Daphne Collage (Teachers Permission)',
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
            $('#spupermsion').on('click', 'button.deleteBtn_info', function () {
                var buttonValue = "256";
                var table = $(this).data('table');
                //var id = $(this).data('id');
                var id = $(this).data('id2');
                // alert(id);
                // var buttonValue = "160";
                // var data = table.row($(this).parents('tr')).data();
                //var inforid = data['trv_infor_id'];
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
                                id: id
                            },
                            success: function (response) {
                                // alert(response);
                                // table.ajax.reload();
                                msgbxInstance.okCompleted();
                            }
                        });
                    }
                });
            });
            /*
            !2nd table data start
            */
            // Delete
            $('#techer').on('click', 'button.deleteBtn_all', function () {
                var buttonValue = "257";
                var table = $(this).data('table');
                var id = $(this).data('id2');
                // alert(id);
                // var buttonValue = "160";
                // var data = table.row($(this).parents('tr')).data();
                //var inforid = data['trv_infor_id'];
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
                                id: id
                            },
                            success: function (response) {
                                ///alert(response);
                                // table.ajax.reload();
                                msgbxInstance.okCompleted();
                            }
                        });
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <!-- ======= Header ======= -->
        <!-- End Header -->
        <!-- ======= Sidebar ======= -->
        <!-- End Sidebar-->
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Salary Calculation Report</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-xl">



                        <table id="spupermsion" class="spupermsion table table-bordered" border="0">
                            <thead>

                                <tr>
                                    <th rowspan="2">Name</th>
                                    <th colspan="4">Task Completed</th>
                                    <th colspan="4">Additional Task Completed</th>
                                    <th colspan="3">Allowance</th>
                                    <th colspan="2">Salary Allowance</th>
                                    <th colspan="2">Credit</th>
                                </tr>
                                <tr>
                                    <!-- Name -->

                                    <!-- Task Completed -->
                                    <th>(D)</th>
                                    <th>(H)</th>
                                    <th>(R)</th>
                                    <th>(TR)</th>
                                    <!-- Addition task completed -->
                                    <th>(D)</th>
                                    <th>(H)</th>
                                    <th>(R)</th>
                                    <th>(TR)</th>
                                    <!-- Allowance  -->
                                    <th>(D)</th>
                                    <th>(T)</th>
                                    <th>(R)</th>
                                    <!-- Salary Allowance -->
                                    <th>(D)</th>
                                    <th>(R)</th>
                                    <!-- Credit -->
                                    <th>(D)</th>
                                    <th>(R)</th>
                                </tr>
                            </thead>
                            <tbody border="1">
                                <!-- Row 1 - Task Completed -->
                                <?php
        // get the pass data previous page
        $empID = isset($_GET['id']) ? $_GET['id'] : null;
        $serchDatePreavious = isset($_GET['dateofhime']) ? $_GET['dateofhime'] : null;
        $serchDate = date('Ym', strtotime($serchDatePreavious));
        //make object class calculationSalary of qry.php
        $calculationSalary = new calculationSalary();
        $getName = $calculationSalary->getName($mysqli, $empID, $serchDate);
        $confirmSession = $calculationSalary->confirmSession($mysqli, $empID, $serchDate);
        $transfer_session = $calculationSalary->transfer_session($mysqli, $empID, $serchDate);
        $Monthly_add_allowance_view  = $calculationSalary->Monthly_add_allowance_view($mysqli, $empID, $serchDate);
        $credit_sesction_view = $calculationSalary->credit_sesction_view($mysqli, $empID, $serchDate);
        $sub_total_section = $calculationSalary->sub_total_section($mysqli, $empID, $serchDate);
        $Month_salary_section = $calculationSalary->Month_salary_section($mysqli, $empID, $serchDate);

        $Gn = mysqli_fetch_all($getName, MYSQLI_ASSOC);
        $cm = mysqli_fetch_all($confirmSession, MYSQLI_ASSOC);
        $tcm = mysqli_fetch_all($transfer_session, MYSQLI_ASSOC);
        $ms_allow = mysqli_fetch_all($Monthly_add_allowance_view, MYSQLI_ASSOC);
        $crd = mysqli_fetch_all($credit_sesction_view, MYSQLI_ASSOC);
        $ms_sub = mysqli_fetch_all($sub_total_section, MYSQLI_ASSOC);
        $ms_last = mysqli_fetch_all($Month_salary_section, MYSQLI_ASSOC);
        $maxCount = max(count($Gn), count($cm), count($tcm), count($ms_allow), count($crd), count($ms_sub), count($ms_last));
           $max2 =  $maxCount- 1;
        for ($i = 0; $i < max(count($Gn), count($cm), count($tcm), count($ms_allow), count($crd), count($ms_sub), count($ms_last)); $i++) {
        ?>
                                <tr>
                                    <!-- Name -->
                                    <?php
            
            if(isset($Gn[$i])){
                
                echo "<td style='text-align: left;'>{$Gn[$i]['frist_name']} {$Gn[$i]['last_name']}</td>";
                
            }
            else{
                    
                echo "<td> </td>";
                
            }
            if(isset($cm[$i])){
               
            //Task completed
            
                echo  "<td style='text-align: left;'>{$cm[$i]['date_generated']}</td>
                    <td style='text-align: left;'>{$cm[$i]['calculate_hour']}</td>
                    <td style='text-align: left;'>{$cm[$i]['total_salary_day']}</td>
                    <td style='text-align: right;'>{$cm[$i]['trv_gen']}</td>";

              }
              else{
                    echo   
                    "<td></td>
                    <td></td>
                    <td></td>
                    <td></td>";
              }
            if(isset($tcm[$i])){

            // <!-- Additional Task completed -->
                   echo 
                   "<td style='text-align: left;'>{$tcm[$i]['date_generated']}</td>
                    <td style='text-align: left;'>{$tcm[$i]['calculate_hour']}</td>
                    <td style='text-align: left;'>{$tcm[$i]['total_salary_day']}</td>
                    <td style='text-align: right;'>{$tcm[$i]['trv_gen']}</td>";
            }
            else{
                    echo 
                        "<td></td>
                        <td></td>
                        <td></td>
                        <td></td>";
            }
            if(isset($ms_allow[$i])){            
                
            // <!-- Additional allowance -->

            echo "<td style='text-align: left;'>{$ms_allow[$i]['slry_allowance_event_description_date']}</td>
                  <td style='text-align: left;'>{$ms_allow[$i]['slry_allowance_event_description']}</td>
                  <td style='text-align: right;'>{$ms_allow[$i]['slry_allowance_event_description_price']}</td>";
            }
            else{
                echo 
                "<td></td>
                <td></td>
                <td></td>";
            }
             if(isset($ms_last[$i])){      
            // <!-- Salary Allowance -->
                echo 
                "<td style='text-align: left;'>{$ms_last[$i]['monthly_salary_lst_id']}</td>
                <td style='text-align: right;'>{$ms_last[$i]['Mbonus']}</td>";
             }
             else{
                echo 
                "<td></td>
                <td></td>";                
             }
              if(isset($crd[$i])){    
            // <!-- Credit -->
                    echo
                    "<td style='text-align: left;'>{$crd[$i]['loanSec_description_date']}</td>
                    <td style='text-align: right;'>{$crd[$i]['loanSec_price']}</td></tr>";  
            }
            else{
                    echo
                    "<td></td>
                    <td></td>
                    </tr>";
            }
             
            
        if($max2 == $i){

        //$sub_total_section = $calculationSalary->sub_total_section($mysqli, $empID, $serchDate);
        // <!-- Row 2 - Net Total -->
        echo 
        "<tr>
          <td colspan='3'><b>Sub Total</b></td>
          <td colspan='4' style='text-align: right;'><strong>". $calculationSalary->sub_total_section($mysqli, $empID, $serchDate)->fetch_assoc()['Msub_day_salary_Total_schedule'] ."</strong></td>
          <td colspan='2' style='text-align: right;'> <strong>". $calculationSalary->sub_total_section($mysqli, $empID, $serchDate)->fetch_assoc()['Msub_transport_last_Totals'] ."</strong></td>
          <td colspan='3' style='text-align: right;'><strong>". $calculationSalary->sub_total_section($mysqli, $empID, $serchDate)->fetch_assoc()['Msub_event_last_Total'] ."</strong></td>
          <td colspan='2' style='text-align: right;'> <strong>". $calculationSalary->Month_salary_section($mysqli, $empID, $serchDate)->fetch_assoc()['Mbonus'] ."</strong></td>
          <td colspan='2' style='text-align: right;'> <strong>". $calculationSalary->sub_total_section($mysqli, $empID, $serchDate)->fetch_assoc()['Msub_loan_last_Total'] ."</strong></td>
        </tr>";

         echo   
            "<tr class='border-dark'>
                <td colspan='13' style='text-align: left;'><strong>Net Total<strong></td>
                <td colspan='3' style='text-align: right;'><strong>". $calculationSalary->Month_salary_section($mysqli, $empID, $serchDate)->fetch_assoc()['alltotaol'] ."</strong></td>
            </tr>";

    
            }
         }
        ?>
                            </tbody>
                        </table>





                    </div>
                    <br />
                </div>
            </div>
        </section>
        <!-- End #main -->
        <!-- ======= Footer ======= -->

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
    </div>
</body>

</html>
<?php
//   }
//   }
// }
// else{
//   header("Location: ../index.php");
// }
?>