<?php


session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol100"){
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/msgBox.js"></script>

    <!-- Magnific Popup CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <style>
        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>

    <script>
        $(document).ready(function () {
            // msg
            var msgbxInstance = new msgbx();

            // cound the password length
            $('#usrpass').on('input', function () {
                var password = $(this).val();
                var errorSpan = $('#password-error');

                if (password.length < 8) {
                    errorSpan.text('Password must be at least 8 characters long').removeClass(
                        'success-message').addClass('error-message');
                } else {
                    errorSpan.text('Password meets length requirement').removeClass('error-message')
                        .addClass('success-message');
                }
            });

            //156
            $('#chang_teacher_pass_156').click(function () {

                var buttonValue = $(this).val();
                //var username = $('#username').val();
                var usrpass = $('#usrpass').val();

                if(usrpass.length < 8){
                    msgbxInstance.passwordval();
                }
                else{
                $.ajax({
                    url: 'backCode/front_backend.php',
                    type: 'POST',
                    data: {buttonValue: buttonValue,
                    usrpass: usrpass},
                    success: function (data) {
                       msgbxInstance.okCompleted();
                    }
                });
                }

            });
            //showValue
            function showdata() {

                var buttonValue = "157";

                $.ajax({
                    url: 'backCode/front_backend.php',
                    type: 'POST',
                    data: {
                        buttonValue: buttonValue
                    },
                    dataType: 'json',
                    success: function (data) {
                        //Swal.fire(data);
                        //alert(data);
                        $("#username").val(data.user_name);
                    }
                });

            }
            showdata();
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
            <h1>Teacher</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">My profile</li>
                    <li class="breadcrumb-item active">Teacher</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section contact">

            <div class="row gy-4">

                

                <div class="col-xl-6">
                    <div class="card p-4">
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="User Name" disabled>
                            </div>
                            <div class="col-md-12 ">
                                <input type="password" class="form-control" name="usrpass" id="usrpass"
                                    placeholder="Password">
                            </div>
                            <div class="col-md-12 ">
                                <p id="password-error">********</p>
                            </div>
                            <div class="col-md-12 ">

                                <p>Use a minimum of 12 characters. Longer passwords are generally more secure<p>
                                        <p>Include a mix of uppercase and lowercase letters.</p>
                                        <p>Include special characters (e.g., !, @, #, $, %).</p>
                                    </p>

                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-success" id="chang_teacher_pass_156"
                                            value="156">Save</button>
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