<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol105"){
         ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
     // echo $_SESSION['code_'.$i];
      //continue
require_once '../include/errorShow.php';
require_once '../qry/daphne_variable.php';
require_once '../include/front_header.php';
require_once '../include/front_footer.php';

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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    // Define a simple class using jQuery
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
    //////////////////////////////////stil developing section start///////////////////
    $(document).ready(function () {

      ////////
      class show_data {
        //125---------data view section ------------------------------------------
        show_125() {
          var buttonValue = "125";
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#viewdata").html(response);
            }
          });
        }
      }

      var dataShower = new show_data();
      dataShower.show_125();
      //dataShower.show_115();
      //dataShower.show_116();


      //////////////////////////////////still developing section end///////////////////
      const myObject = new MyClass();

      //123---------------- data insert and update------------------------
      $("#contactfrm_submit").click(function () {
        var buttonValue = $(this).val();
        var schoolname = $("#schoolname").val();
        var tel1 = $("#tel1").val();
        var tel2 = $("#tel2").val();
        var adr1 = $("#adr1").val();
        var gps1 = $("#gps1").val();
        var call1 = $("#cta1").val();

        if (schoolname == "" && tel1 == "" && tel2 == "" && adr1 == "" && gps1 == "" && call1 == "") {
          myObject.showAlertnull(buttonValue);
        } else {

          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
              schoolname: schoolname,
              tel1: tel1,
              tel2: tel2,
              adr1: adr1,
              gps1: gps1,
              call1: call1
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              //$("#result").html(response);
              $("#schoolname").val("");
              $("#tel1").val("");
              $("#tel2").val("");
              $("#adr1").val("");
              $("#gps1").val("");
              $("#call1").val("");
              myObject.showAlertcompleted(buttonValue);
              location.reload();
            }
          });
        }

      });

      //124----------cancel section ---------------------------------
      $("#contactfrm_cancel").click(function () {
        $("#schoolname").val("");
        $("#tel1").val("");
        $("#tel2").val("");
        $("#adr1").val("");
        $("#gps1").val("");
        $("#call1").val("");
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit front home page (School Information)</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Interface Upgrade Section</li>
          <li class="breadcrumb-item active">Modernization 3</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">School Information</h5>

              <!-- General Form Elements -->

              <div class="row mb-3">

                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="School name" id="schoolname">
                </div>
              </div>

              <div class="row mb-3">

                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Tel Number 1" id="tel1">
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-8">
                  <input type="text" class="form-control" placeholder="Tel Number 1" id="tel2">
                </div>
              </div>

              <div class="row mb-3">

                <div class="col-sm-8">
                  <textarea class="form-control" style="height: 100px" placeholder="Address" id="adr1"></textarea>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-8">
                  <textarea class="form-control" style="height: 100px" placeholder="GPS Location" id="gps1"></textarea>
                </div>
              </div>
              <div class="row mb-3">

                <div class="col-sm-8">
                  <textarea class="form-control" style="height: 100px" placeholder="Call To Action"
                    id="cta1"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" id="contactfrm_submit" value="123">Submit</button>
                  <button type="submit" class="btn btn-secondary" id="contactfrm_cancel" value="124">Cancel</button>
                </div>
              </div>

              <!-- End General Form Elements -->

            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">School Information</h5>

              <!-- Advanced Form Elements -->
              <table class="table">
                <tbody id="viewdata">
                  <tr>
                    <th scope="col">School Name</th>
                    <td id="sch_view_125">Brandon Jacob</td>
                  </tr>
                  <tr>
                    <th scope="col">Tel 1</th>
                    <td id="tel1_view_126">Brandon Jacob</td>
                  </tr>
                  <tr>
                    <th scope="col">Tel 2</th>
                    <td id="tel2_view_127">Brandon Jacob</td>
                  </tr>
                  <tr>
                    <th scope="col">Address</th>
                    <td id="adr_view_128">Brandon Jacob</td>
                  </tr>
                  <tr>
                    <th scope="col">GPS</th>
                    <td id="gps_view_129">Brandon Jacob</td>
                  </tr>
                  <tr>
                    <th scope="col">Call to us Paragraph</th>
                    <td id="cll_view_130">Brandon Jacob</td>
                  </tr>
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