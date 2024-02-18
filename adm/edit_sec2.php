<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol104"){
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- -->

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
        //114---------data view section ------------------------------------------
        show_114() {
          var buttonValue = "114";
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#small_paragraph").html(response);
            }
          });
        }

        //115-------------data view section ------------------------------------------
        show_115() {
          var buttonValue = "115";
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#abUS_2nd_sec_show_1").html(response);
            }
          });
        }

        //116------------ data view setion --------------------------------------------
        show_116() {
          var buttonValue = "116";
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#abUS_2nd_sec_show_2").html(response);
            }
          });
        }

      }

      var dataShower = new show_data();
      dataShower.show_114();
      dataShower.show_115();
      dataShower.show_116();


      //////////////////////////////////still developing section end///////////////////
      const myObject = new MyClass();
      //119---------------- data insert and update------------------------
      $("#small_parahraph_submit").click(function () {

        var floatingTextarea = $("#floatingTextarea1").val();
        var buttonValue = $(this).val();

        if (floatingTextarea == "") {
          myObject.showAlertnull(buttonValue);
        } else {

          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
              floatingTextarea: floatingTextarea
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              // alert(response);
              //$("#result").html(response);
              $("#floatingTextarea1").val("");
              myObject.showAlertcompleted(buttonValue);
              location.reload();
            }
          });
        }

      });

      //120------------------------cancel section-------------------------
      $("#small_paragraph_cancel").click(function () {
        $("#floatingTextarea1").val("");
      });


      //121---------------- data insert and update------------------------
      $("#vission_mission_sec_submit").click(function () {
        var buttonValue = $(this).val();
        var floatingTextarea1 = $("#floatingTextarea3").val();
        var floatingTextarea2 = $("#floatingTextarea5").val();

        if (floatingTextarea1 == "" && floatingTextarea2 == "") {
          myObject.showAlertnull(buttonValue);
        } else {

          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
              floatingTextarea1: floatingTextarea1,
              floatingTextarea2: floatingTextarea2
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              //$("#result").html(response);
              $("#floatingTextarea3").val("");
              $("#floatingTextarea5").val("");
              myObject.showAlertcompleted(buttonValue);
              location.reload();
            }
          });
        }

      });

      //122----------cancel section ---------------------------------
      $("#vission_mission_sec_cancel").click(function () {
        $("#floatingTextarea3").val("");
        $("#floatingTextarea5").val("");
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
      <h1>Edit front home page (Vision And Mission)</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Interface Upgrade Section</li>
          <li class="breadcrumb-item active">Modernization 2</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <?php
            // add the mine word section
            ?>
          <!-- 114 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vision And Mission Main Paragraph</h5>

              <!-- Floating Labels Form -->

              <hr />
              <div class="col-12">
                <div class="form-floating">
                  <h4 id="small_paragraph"></h4>
                </div>
              </div>
              <hr />
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea1"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea">Writing</label>
                </div>
              </div>
              <hr />
              <div class="text-center">
                <button type="submit" class="btn btn-primary" id="small_parahraph_submit" value="119">Submit</button>
                <button type="reset" class="btn btn-secondary" id="small_paragraph_cancel" value="120">Cancel</button>
              </div>
              <!-- End floating Labels Form -->

            </div>
          </div>



        </div>

        <div class="col-lg-6">
          <!-- 115 -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vision & Mission</h5>
              <!-- Floating Labels Form -->

              <hr />
              <div class="col-12">
                <div class="form-floating">
                  <h5><u><b>Vision</b></u></h5>
                  <h4 id="abUS_2nd_sec_show_1"></h4>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea3"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea3">Writing</label>
                </div>
              </div>
              <!-- 116 -->
              <!-- second part  -->
              <hr />
              <div class="col-12">
                <div class="form-floating">
                  <h5><u><b>Mission</b></u></h5>
                  <h4 id="abUS_2nd_sec_show_2"></h4>
                </div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Address" id="floatingTextarea5"
                    style="height: 100px;"></textarea>
                  <label for="floatingTextarea5">Writing</label>
                </div>
              </div>

              <hr />
              <div class="text-center">
                <button type="submit" class="btn btn-primary" id="vission_mission_sec_submit"
                  value="121">Submit</button>
                <button type="reset" class="btn btn-secondary" id="vission_mission_sec_cancel"
                  value="122">Cancel</button>
              </div>
              <!-- End floating Labels Form -->

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