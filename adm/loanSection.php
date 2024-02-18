<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol116"){
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
<link href="assets/img/daphne.jpeg" rel="icon">
<title><?php $vblsection2->title(); ?> </title>
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- select2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- DataTables Buttons CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function () {
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
                        title: 'Daphne Lord School (Loan Installment)',
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

            $('#example_installment').DataTable({
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
                        title: 'Daphne Lord School (Loan Installment)',
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



            //delete
            $('.deleteBtn_info').click(function () {
                var buttonValue = "177";
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
                                //alert(id);
                                msgbxInstance.okCompleted();
                            }
                        });
                    }
                });
            });
            //confirmed
            $('.confirmBtn_info').click(function () {
                var buttonValue = "178";
                var table = $(this).data('table');
                var id = $(this).data('id');
                var loan_amount = $(this).data('id2');
                // var id2 = $(this).data('id2');

                // Send an AJAX request to delete the record
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be confirm this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, confirm it!"
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
                                //alert(response);
                                // msgbxInstance.okCompleted();
                                $('#alowPrice').val(loan_amount);
                                $('#id_of_loan').val(id);
                            }
                        });
                    }
                });
            });
            //176 insert
            $('#total_salary_add_176').click(function () {
                var buttonValue = $(this).val();
                var TeacherName = $('#TeacherName').val();
                var description_allowance = $('#description_allowance').val();
                var alowPrice = $('#alowPrice').val();
                if ((TeacherName == "" && description_allowance == "" && alowPrice == "") || (
                        TeacherName == "" ||
                        description_allowance == "" || alowPrice == "")) {
                    msgbxInstance.nullvale();
                } else {
                    // >> Identify the previous loan settle 
                    $.ajax({
                        url: 'backCode/front_backend.php',
                        type: 'POST',
                        data: {
                            buttonValue: buttonValue,
                            TeacherName: TeacherName,
                            description_allowance: description_allowance,
                            alowPrice: alowPrice
                        },
                        success: function (data) {
                            if (data == "1") {
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Before Loan No settled yet",
                                    footer: ''
                                });
                            } else {
                                msgbxInstance.okCompleted();
                            }

                        }
                    });
                }
            });
            /*
                >>> Calculate the Installment
            */
            $('#cal_installment_test').click(function (e) {
                var buttonValue = $(this).val();
                var month_duration = $('#installment_Month_Duration').val();
                var amount = $('#alowPrice').val();

                // >> Calculate Installment
                var installment = amount / month_duration;
                // Clear previous content
                $('#installment_tbody_preview').empty();

                // Get the current date
                let currentDate = new Date();

                // Loop through each month starting from January until the current month
                for (let i = 1; i <= month_duration; i++) {
                    // Create a new Date object for each month
                    let monthDate = new Date(currentDate.getFullYear(), i, 1);

                    // Format the month as MMMM (e.g., January, February)
                    let monthName = monthDate.toLocaleString('default', {
                        month: 'long'
                    });

                    // Get the year of the month
                    let year = monthDate.getFullYear();

                    // Append the month and year to the list
                    $('#installment_tbody_preview').append(
                        `<tr><td>${year} ${monthName}</td> <td>${installment}</td></tr>`);
                }

            });

            /*
                >>> Save tbody values 
            */
            $('#btn_Add_installment_for_database').click(function (e) {
                //e.preventDefault();
                var dataToInsert = [];
                var buttonValue = "btn_312";
                $('#installment_tbody_preview').find('tr').each(function () {
                    var $columns = $(this).find('td');
                    var month = $columns.eq(0).text().trim();
                    var installment = $columns.eq(1).text().trim();

                    var id_of_loan = $('#id_of_loan').val();
                    dataToInsert.push({
                        month: month,
                        installment: installment,
                        id_of_loan: id_of_loan
                    });
                    //alert('Month: ' + month + ', Installment: ' + installment);
                });

                $.ajax({
                    type: 'POST',
                    url: 'backCode/front_backend.php', // Replace with the actual PHP script URL
                    data: {
                        buttonValue: buttonValue,
                        dataToInsert: dataToInsert
                    },
                    success: function (response) {
                        msgbxInstance.okCompleted();
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            });
            /*
                >>> Installment Confirm 
            */
            $('.confirmBtn_installment').click(function (e) {
                //e.preventDefault();
                var buttonValue = "btn_315";
                var installment_id = $(this).data('id');
                var installment_date = $(this).data('id2');
                var installment_amount = $(this).data('id3');
                var installment_emiId = $(this).data('id4');
                // alert(installment_id+" "+installment_date+" "+installment_amount+" "+installment_emiId);

                Swal.fire({
                    title: "Are you sure?",
                    text: "Confirm this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, confirm it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: 'backCode/front_backend.php',
                            method: 'POST',
                            data: {
                                buttonValue: buttonValue,
                                installment_id: installment_id,
                                installment_date: installment_date,
                                installment_amount: installment_amount,
                                installment_emiId: installment_emiId
                            },
                            success: function (response) {
                                // Handle the response from the server
                                //alert(response);
                                msgbxInstance.okCompleted();
                                // $('#alowPrice').val(loan_amount);
                                // $('#id_of_loan').val(id);
                            }
                        });
                    }
                });
            });

            /*
                >>Manually Settle the loan
            */
            // Initialize DataTables
            //$('#example').DataTable();

            // Handle cell click event

            $('#example').on('click', 'td', function () {
                var buttonValue = "btn_320";
                // Get the content of the clicked cell
                var loanId = $(this).closest('tr').find('td:first').text();
                var name = $(this).closest('tr').find('td:eq(1)').text();
                var cellNumber = $(this).index();
                if (cellNumber == 6 || cellNumber == 7) {
                }
                else{
                Swal.fire({
                    title: "Do you want to Settled this loan of " + name + " ?",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: "Yes",
                    denyButtonText: `No`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "backCode/front_backend.php",
                            data: {
                                buttonValue: buttonValue,
                                loanId: loanId
                            },
                            success: function (response) {
                                Swal.fire(
                                    "This employee is all Loan ara settled now",
                                    "", "success");
                                location.reload();
                            }
                        });

                    } else if (result.isDenied) {
                        Swal.fire("Changes are not saved", "", "info");
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
            <h1>Loan Section</h1>
            <nav>
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item">Administration Hub</li>
                    <li class="breadcrumb-item active">Loan Section</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Loan</h5>
                            <!-- Horizontal Form -->
                            <div class="form-group md-2">
                                <label for="description" class="control-label">Select Teacher</label>
                                <!-- Your HTML Select2 dropdown -->
                                <select class="selectTeacher form-control form-control-sm rounded-0" name="TeacherName"
                                    id="TeacherName" placeholder="select Teacher">
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
                            <div class="form-group mb-2">
                                <label for="description_allowance" class="col-sm-5 col-form-label">Description
                                </label>
                                <textarea name="description_allowance" id="description_allowance"
                                    class="form-control"></textarea>
                            </div>
                            <label for="inputEmail3" class="col-sm-6 col-form-label">Loan Price</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">LKR</span>
                                </div>
                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)"
                                    id="alowPrice">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="total_salary_add_176" class="btn btn-primary" value="176">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Make Installment</h5>
                            <!-- Horizontal Form -->
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" id="id_of_loan" disabled>
                            </div>
                            <div class="form-group md-2">
                                <label for="description" class="control-label">Select Month Duration</label>
                                <!-- Your HTML Select2 dropdown -->
                                <select class="selectTeacher form-control form-control-sm rounded-0"
                                    name="installment_Month_Duration" id="installment_Month_Duration"
                                    placeholder="select Teacher">
                                    <!-- Options will be dynamically added here -->
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Month</option>
                                    <option value="3">3 Month</option>
                                    <option value="4">4 Month</option>
                                    <option value="5">5 Month</option>
                                    <option value="6">6 Month</option>
                                    <option value="7">7 Month</option>
                                    <option value="8">8 Month</option>
                                    <option value="9">9 Month</option>
                                    <option value="10">10 Month</option>
                                    <option value="11">11 Month</option>
                                    <option value="12">12 Month</option>
                                </select>
                                <button class="btn btn-primary btn-sm" id="cal_installment_test" value="btn_310">Test
                                    Schedule</button>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description_allowance" class="col-sm-5 col-form-label">Preview
                                </label>
                                <table id="installment_preview" class="" border="1">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Installment (LKR)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="installment_tbody_preview">
                                        <tr>
                                            <td id=""></td>
                                            <td id=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                <button id="btn_Add_installment_for_database" class="btn btn-primary"
                                    value="btn_316">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-warning">
                    <h4><u>Credit</u></h4>
                    <table id="example" class="range_allowance table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Loan Date</th>
                                <th>Loan Description</th>
                                <th>Loan (LKR)</th>
                                <th>Action</th>
                                <th>Confirm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    // Output employees data
                    $loansec = new loansec();
                    $result174 = $loansec->loansec_select($mysqli);
                    $count = 0;
                    while ($row174 = mysqli_fetch_assoc($result174)) {
                      
                            echo "<tr>
                            <td>{$row174['loanid']}</td>
                            <td>{$row174['frname']}</td>
                            <td>{$row174['lstname']}</td>
                            <td>{$row174['lnrdate']}</td>
                            <td>{$row174['lnrdescription']}</td>
                            <td>{$row174['lnpPrice']}</td>";
                            if ($row174['crnf'] == "0") {
                                echo " <td><button class='deleteBtn_info btn btn-danger btn-sm' data-table='employees' data-id='{$row174['loanid']}'>Delete</button></td>
                                <td><button class='confirmBtn_info btn btn-warning btn-sm' data-table='employees' data-id='{$row174['loanid']}'  data-id2='{$row174['lnpPrice']}'>Confirm</button></td>";
                            } else {
                                echo "
                                <td><button class='btn btn-danger btn-sm' data-table='employees' data-id='{$row174['loanid']}' disabled>Delete</button></td>
                                <td><button class='btn btn-warning btn-sm' data-table='employees' data-id='{$row174['loanid']}' disabled>Confirmed</button></td>";
                            }
                            echo "</tr>";
                        
                        $count++;
                    }
                    ?>
                        </tbody>
                    </table>


                </div>
                <hr />
                <!-- >> Loan installment Table -->
                <div class="col-lg-6 bg-secondary">
                    <h4><u>Installment</u></h4>
                    <table id="example_installment" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Installment Month</th>
                                <th>Installment (LKR)</th>
                                <th>Confirm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $currentDateTime_condition = date('Y-m');
                    //$formattedDate = date("Y-m-d", $currentDateTime_condition);
                    // Output employees data
                    $loansec = new loansec();
                    $result174_2 = $loansec->select_loan_installment($mysqli);
                    $count = 0;
                    while ($row174_2 = mysqli_fetch_assoc($result174_2)) {
                      
                            echo "<tr>
                            <td>{$row174_2['loanid']}</td>
                            <td>{$row174_2['frname']}</td>
                            <td>{$row174_2['lstname']}</td>
                            <td>{$row174_2['Month_gen']}</td>
                            <td>{$row174_2['Installment']}</td>";
                            if ($row174_2['confirm_instalment'] == "0" && $row174_2['Month_gen'] ==   $currentDateTime_condition) {
                                echo "<td><button class='confirmBtn_installment btn btn-warning btn-sm' data-table='employees' data-id='{$row174_2['loanid']}'  data-id2='{$row174_2['Installment']}' data-id3='{$row174_2['Month_gen']}' data-id4='{$row174_2['empid']}'>Confirm</button></td>";
                            } else {
                                if($row174_2['confirm_instalment'] == "0"){
                                    echo "<td><button class='btn btn-warning btn-sm' data-table='employees' data-id='{$row174_2['loanid']}' disabled>No Confirm yet</button></td>";
                                }
                                else{
                                    echo "<td><button class='btn btn-warning btn-sm' data-table='employees' data-id='{$row174_2['loanid']}' disabled>Confirmed</button></td>";
                                }
                                
                            }
                            echo "</tr>";
                        
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