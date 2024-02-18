<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol103"){
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
//////////////////////////////////////////////////////
    $(document).ready(function () {

      ////////
      class show_data{
          //108
            show_108() {
              var buttonValue = "108";
              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    $("#mind_attract_show").html(response);
                }
              });
            }

          //109
            show_109() {
              var buttonValue = "109";
              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    $("#abUS1st_sec_show_pg1").html(response);
                }
              });
            }

          //110
          show_110() {
              var buttonValue = "110";
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

          //111
          show_111() {
              var buttonValue = "111";
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

          //112
          show_112() {
              var buttonValue = "112";
              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    $("#abUS_2nd_sec_show_3").html(response);
                }
              });
            }

          //113
          show_113() {
              var buttonValue = "113";
              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    $("#abUS_3rd_sec_show").html(response);
                }
              });
            }


      }

      var dataShower = new show_data();
        dataShower.show_108();
        dataShower.show_109();
        dataShower.show_110();
        dataShower.show_111();
        dataShower.show_112();
        dataShower.show_113();

      ///////
      const myObject = new MyClass();
       //100
       $("#mind_attraction_submit").click(function () {

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

      //101
      $("#mind_attraction_cancel").click(function () {
        $("#floatingTextarea1").val("");
      });  

      //102
      $("#about_us_one_sec_submit").click(function () {
        var buttonValue = $(this).val();
        var floatingTextarea = $("#floatingTextarea2").val();

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
                    //$("#result").html(response);
                    $("#floatingTextarea2").val("");
                   myObject.showAlertcompleted(buttonValue);
                   location.reload();
                }
              });
            }
        
      });  
      
      //103
       $("#about_us_one_sec_cancel").click(function () {
        $("#floatingTextarea2").val("");
      });  


      //104
      $("#about_us_2nd_sec_submit").click(function () {
        var buttonValue = $(this).val();
        var floatingTextarea1 = $("#floatingTextarea3").val();
        var floatingTextarea2 = $("#floatingTextarea4").val();
        var floatingTextarea3 = $("#floatingTextarea5").val();

        if (floatingTextarea1 == "" && floatingTextarea2 == "" && floatingTextarea3 == "") {
              myObject.showAlertnull(buttonValue);
            } else {

              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                  floatingTextarea1: floatingTextarea1,
                  floatingTextarea2: floatingTextarea2,
                  floatingTextarea3: floatingTextarea3
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    //$("#result").html(response);
                    $("#floatingTextarea3").val("");
                    $("#floatingTextarea4").val("");
                    $("#floatingTextarea5").val("");
                   myObject.showAlertcompleted(buttonValue);
                   location.reload();
                }
              });
            }
        
      });  
      
      //105
       $("#about_us_2nd_sec_cancel").click(function () {
        $("#floatingTextarea3").val("");
        $("#floatingTextarea4").val("");
        $("#floatingTextarea5").val("");
      });  

      //106
      $("#about_us_3rd_sec_submit").click(function () {
        var buttonValue = $(this).val();
        var floatingTextarea1 = $("#floatingTextarea6").val();

        if (floatingTextarea1 == "") {
              myObject.showAlertnull(buttonValue);
            } else {

              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                  floatingTextarea1: floatingTextarea1
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    //$("#result").html(response);
                    $("#floatingTextarea6").val("");
                   myObject.showAlertcompleted(buttonValue);
                   location.reload();
                }
              });
            }
        
      });  
      
      //107
       $("#about_us_3rd_sec_cancel").click(function () {
        $("#floatingTextarea6").val("");

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
      <h1>Edit front home page (About Us)</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Interface Upgrade Section</li>
          <li class="breadcrumb-item active">Modernization 1</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

            <?php
            // add the mine word section
            ?>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add the mind attraction paragraph</h5>

              <!-- Floating Labels Form -->
              
                <hr/>
              <div class="col-12">
                  <div class="form-floating">
                    <h4 id="mind_attract_show"></h4>
                  </div>
                </div>
                  <hr/>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea1" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Writing</label>
                  </div>
                </div>
                  <hr/>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" id="mind_attraction_submit" value="100">Submit</button>
                  <button type="reset" class="btn btn-secondary" id="mind_attraction_cancel" value="101">Cancel</button>
                </div>
              <!-- End floating Labels Form -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
            <h5 class="card-title">About Us Sub Paragraph </h5>
                      <!-- Floating Labels Form -->
                      
                        <hr/>
                        <div class="col-12">
                          <div class="form-floating">
                            <h5><u><b>1st Paragraph</b></u></h5>
                            <h4 id="abUS_2nd_sec_show_1"></h4>
                          </div>
                        </div>
                          
                        <div class="col-12">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Address" id="floatingTextarea3" style="height: 100px;"></textarea>
                            <label for="floatingTextarea3">Writing</label>
                          </div>
                        </div>

                        <!-- second part  -->
                            <hr/>
                            <div class="col-12">
                              <div class="form-floating">
                              <h5><u><b>2nd Paragraph</b></u> </h5>
                                <h4 id="abUS_2nd_sec_show_2"></h4>
                              </div>
                            </div>
                              
                                
                              <div class="col-12">
                                <div class="form-floating">
                                  <textarea class="form-control" placeholder="Address" id="floatingTextarea4" style="height: 100px;"></textarea>
                                  <label for="floatingTextarea4">Writing</label>
                                </div>
                              </div>
                              <hr/>

                            <div class="col-12">
                              <div class="form-floating">
                                <h5><u><b>3rd Paragraph</b></u></h5>
                                <h4 id="abUS_2nd_sec_show_3"></h4>
                              </div>
                            </div>
                              
                            <div class="col-12">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="floatingTextarea5" style="height: 100px;"></textarea>
                                <label for="floatingTextarea5">Writing</label>
                              </div>
                            </div>
                            
                            <hr/>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" id="about_us_2nd_sec_submit" value="104">Submit</button>
                          <button type="reset" class="btn btn-secondary" id="about_us_2nd_sec_cancel" value="105">Cancel</button>
                        </div>
                          <!-- End floating Labels Form -->

            </div>
          </div>


        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Us Main Section</h5>

                          <hr/>
                        <div class="col-12">
                          <div class="form-floating">
                            <h4 id="abUS1st_sec_show_pg1">Welcome to Daphne load school, an institution that goes beyond traditional education</h4>
                          </div>
                        </div>
                          <hr/>
                        <div class="col-12">
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Address" id="floatingTextarea2" style="height: 100px;"></textarea>
                            <label for="floatingTextarea2">Writing</label>
                          </div>
                        </div>
                        <hr/>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary" id="about_us_one_sec_submit" value="102">Submit</button>
                          <button type="reset" class="btn btn-secondary" id="about_us_one_sec_cancel" value="103">Cancel</button>
                        </div>

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">About Us 3rd section</h5>
                              <div class="col-12">
                                <div class="form-floating">
                                  <h4 id="abUS_3rd_sec_show"></h4>
                                </div>
                              </div>
                                <hr/>
                              <div class="col-12">
                                <div class="form-floating">
                                  <textarea class="form-control" placeholder="Address" id="floatingTextarea6" style="height: 100px;"></textarea>
                                  <label for="floatingTextarea6">Writing</label>
                                </div>
                              </div>
                              <hr/>
                              <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="about_us_3rd_sec_submit" value="106">Submit</button>
                                <button type="reset" class="btn btn-secondary" id="about_us_3rd_sec_cancel" value="107">Cancel</button>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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