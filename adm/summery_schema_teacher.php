<?php
/*  Developed date : 23 01 22 
    Update_1 : No.
    
*/
session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol128"){
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
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

            //   Data table part
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
                scrollY: '500px'
                // dom: 'Blfrtip',
                // buttons: [{
                //         extend: 'pdf',
                //         bold: 'true',
                //         fontSize: '15',
                //         title: 'Daphne Lord School (Summery Schema Information)',
                //         subtitle: 'Line 2 of the subtitle',
                //         exportOptions: {
                //             modifier: {
                //                 page: 'current'
                //             },
                //         }
                //     },
                //     'copy', 'csv', 'excel', 'print'
                // ]
            });


            ///////////////////////////////////////////////////////////

            /*
                >>> Get the values of table
                >>> Add staff comment
            */
            $('#example tbody td').on('click', function () {
                // Get column name
                var cellNumber = $(this).index();

                // Get cell value
                var cellValue = $(this).text();

                // Get summery_id from the data attribute
                var summeryId = $(this).closest('tr').find('.delete').attr('value');

                // Perform your desired action with column name, cell value, and summery_id

                if (cellNumber == 4 || cellNumber == 9 || cellNumber == 14 || cellNumber == 20 ||
                    cellNumber == 25 || cellNumber == 30) {
                    //open the model
                    $('#col_id').val(cellNumber);
                    $('#sm_id').val(summeryId);
                    $('#editEmployeeModal').modal('show');
                } else if (cellNumber == 3 || cellNumber == 8 || cellNumber == 13 || cellNumber == 19 ||
                    cellNumber == 24 || cellNumber == 29) {
                    $('#col_id2').val(cellNumber);
                    $('#sm_id2').val(summeryId);
                    $('#editEmployeeModal2').modal('show');
                }

            });

            /*
                >>> Add staff Comment
            */
            $("#summery_comment_add").click(function (e) {
                //e.preventDefault();
                var buttonValue = $(this).val();
                var colid = $('#col_id').val();
                var summerize_id = $('#sm_id').val();
                var comment = $('#summery_stf').val();
                $.ajax({
                    type: "POST",
                    url: "backCode/front_backend.php",
                    data: {
                        buttonValue: buttonValue,
                        summerize_id: summerize_id,
                        comment: comment,
                        colid: colid
                    },
                    success: function (response) {
                        //alert(response);
                        myObject.showAlertcompleted(response);
                        location.reload();
                    }
                });

            });
            /*
                >>> Summery cal
                
            */
            $("#summery_comment_cal").click(function (e) {
                //e.preventDefault();
                var buttonValue = $(this).val();
                var colid = $('#col_id2').val();
                var summerize_id = $('#sm_id2').val();
                var process_cal = $('#process_cal').val();
                $.ajax({
                    type: "POST",
                    url: "backCode/front_backend.php",
                    data: {
                        buttonValue: buttonValue,
                        summerize_id: summerize_id,
                        process_cal: process_cal,
                        colid: colid
                    },
                    success: function (response) {
                        //alert(response);
                        myObject.showAlertcompleted(response);
                        location.reload();
                    }
                });

            });

            /*
                >>> Close Model
                >>> close Two model
            */
            $('#summery_comment_cancel, .close').on('click', function () {
                $('#editEmployeeModal').modal('hide');
            });
            // >> 2nd
            $('#summery_comment_cancel2, .close2').on('click', function () {
                $('#editEmployeeModal').modal('hide');
            });
            ///////////////////////////////////////////////////////////////////////
            //btn 142
            /* $('#subject_Edit_142').on('click', function () {
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
             });*/
            //btn 139
            $('.delete').on('click', function () {
                var summery_id = $(this).attr('value');
                var buttonValue = "btn301";
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
                            type: "POST",
                            url: "backCode/front_backend.php", // Your PHP script URL
                            data: {
                                buttonValue: buttonValue,
                                summery_id: summery_id
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
            <h1>Summery</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Drop Down</li>
                    <li class="breadcrumb-item active">Summery</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <h4><U>Summery</U></h4>
                    <table id="example" class="display SBJsec" style="width:100%">
                        <thead>
                            <tr>
                                <th class="font-weight-bold" colspan="2">YEAR / MONTH</th>
                                <th class="font-weight-bold" colspan="4">SP TR EXERCS & POEMSN</th>
                                <th class="font-weight-bold" colspan="4">VOCABULARY</th>
                                <th class="font-weight-bold" colspan="4">IDENTIFICATION OF LETTERS, NUMBERS, SHAPES &
                                    COLOURS</th>
                                <th class="font-weight-bold" colspan="2">CONVERSATION, GREETINGS & COURTESIES</th>
                                <th class="font-weight-bold" colspan="3">INSTRCTNS</th>
                                <th class="font-weight-bold" colspan="4">READING</th>
                                <th class="font-weight-bold" colspan="4">WRITING</th>
                                <th class="font-weight-bold" colspan="1">--</th>
                            </tr>

                            <tr>
                                
                                <th class="font-weight-normal">Ref. / Txt. Books</th>
                                <th class="font-weight-normal">Class</th>

                                <th class="font-weight-normal">Blank page Exercise book - 80 page</th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>

                                <th class="font-weight-normal">My ABC Book (DLS Workbook).[identification of letters and
                                    of pictures beginning with each letter of the alphabet]</th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>

                                <th class="font-weight-normal">My ABC Book (DLS Workbook)</th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>

                                <th class="font-weight-normal">My ABC Book (DLS Workbook)</th>
                                <th class="font-weight-normal"></th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>

                                <th class="font-weight-normal">Gunasena's Beginning to read 1st half pages 1 - 21 & 28 -
                                    30</th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>

                                <th class="font-weight-normal">Ladybird writing Book series 2, ABC WorkBook Guideline
                                    exercise Book - 80 pages</th>
                                <th class="font-weight-normal">Progress</th>
                                
                                <th class="font-weight-normal">Review (Teacher)</th>
                                <th class="font-weight-normal">Review (Staff)</th>
                                <th class="font-weight-normal"></th>

                            </tr>
                        </thead>

                        <tbody class="font-weight-light">
                            <?php
                            $sessionVal = $_SESSION['emp'];
                                            $summery_schema = new summery_schema($mysqli);
                                            $result2 = $summery_schema->Select_summery_schema_teacher($sessionVal);
                                           // echo "no";
                                            $idGen = 1;
                                            if(mysqli_num_rows($result2) < 0){
                                                echo "not found";
                                            }
                                            else{

                                            
                                            while ($row = $result2->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['formatted_year_month']}</td>
                                            <td>{$row['class_name']}</td>
                                            <td>{$row['sp_tr_exercs_blank_page_book']}</td>
                                            <td><progress value='{$row['sp_tr_exercs_action']}' max='{$row['sp_tr_exercs_progress']}'></progress> <p>({$row['sp_tr_exercs_action']} / {$row['sp_tr_exercs_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['sp_tr_exercs_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['sp_tr_exercs_review_staff']}</td>
                                            <td>{$row['vocabulary_abc_book']}</td>
                                            <td><progress value='{$row['vocabulary_action']}' max='{$row['vocabulary_progress']}'></progress> <p>({$row['vocabulary_action']} / {$row['vocabulary_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['vocabulary_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['vocabulary_review_staff']}</td>
                                            <td>{$row['identification_abc_book']}</td>
                                            <td><progress value='{$row['identification_action']}' max='{$row['identification_progress']}'></progress> <p>({$row['identification_action']} / {$row['identification_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['identification_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['identification_review_staff']}</td>
                                            <td>{$row['conversation_and_instruct']}</td>
                                            <td>{$row['conversation_and_instruct_2']}</td>
                                            <td><progress value='{$row['conversation_action']}' max='{$row['conversation_progress']}'></progress> <p>({$row['conversation_action']} / {$row['conversation_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['conversation_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['conversation_review_staff']}</td>
                                            <td>{$row['reading_gunasenas_book']}</td>
                                            <td><progress value='{$row['reading_action']}' max='{$row['reading_progress']}'></progress> <p>({$row['reading_action']} / {$row['reading_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['reading_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['reading_review_staff']}</td>
                                            <td>{$row['writing_ladybird_book']}</td>
                                            <td><progress value='{$row['writing_action']}' max='{$row['writing_progress']}'></progress> <p>({$row['writing_action']} / {$row['writing_progress']}) </p></td>
                                            
                                            <td class='text-light bg-secondary'>{$row['writing_review_teacher']}</td>
                                            <td class='text-light bg-dark'>{$row['writing_review_staff']}</td>
                                            <td>
                                            <a href='#deleteEmployeeModal' class='delete'  value='{$row['summery_id'] }' id='DeleteSubject_301' disabled><i class='material-icons' data-toggle='tooltip' title='Delete'></i></a>
                                            </td>
                                        </tr>";
                                            }
                                            }
                                        ?>
                        </tbody>

                    </table>

                    <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add The Comment</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Summery ID</label>
                                                    <input type="text" class="form-control" id="sm_id" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Col</label>
                                                    <input type="text" class="form-control" id="col_id" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Teacher Comment</label>
                                            <textarea name="summery_stf" id="summery_stf" cols="10" rows="3"
                                                class="form-control"></textarea>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" id="summery_comment_add"
                                            value="btn_305">Update</button>
                                        <button class="btn btn-default" data-dismiss="modal" id="summery_comment_cancel"
                                            value="302">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal HTML -->
                    <div id="editEmployeeModal2" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add The Comment</h4>
                                        <button type="button" class="close2 close"  data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Summery ID</label>
                                                    <input type="text" class="form-control" id="sm_id2" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Col</label>
                                                    <input type="text" class="form-control" id="col_id2" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Add Percentage</label>
                                            <select name="" id="process_cal" class="form-control">
                                                <option value="0">Select</option>
                                                <option value="5">5%</option>
                                                <option value="10">10%</option>
                                                <option value="15">15%</option>
                                                <option value="20">20%</option>
                                                <option value="25">25%</option>
                                                <option value="30">30</option>
                                                <option value="35">35%</option>
                                                <option value="40">40%</option>
                                                <option value="45">45%</option>
                                                <option value="50">50%</option>
                                                <option value="55">55</option>
                                                <option value="60">60%</option>
                                                <option value="65">65%</option>
                                                <option value="70">70%</option>
                                                <option value="75">75%</option>
                                                <option value="80">80</option>
                                                <option value="85">85%</option>
                                                <option value="90">90%</option>
                                                <option value="95">95%</option>
                                                <option value="100">100%</option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success" id="summery_comment_cal"
                                            value="btn_307">Update</button>
                                        <button class="btn btn-default" data-dismiss="modal"
                                            id="summery_comment_cancel2" value="306">Cancel</button>
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