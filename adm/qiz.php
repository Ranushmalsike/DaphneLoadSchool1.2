<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol106"){
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

  <!-- tostar -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- -->  
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
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
      class show_data{
          //127---------data view section ------------------------------------------
            show_127() {
              var buttonValue = "127";
              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    $("#viewdataqiz").html(response);
                }
              });
            }
     }

      var dataShower = new show_data();
        dataShower.show_127();


      //////////////////////////////////still developing section end///////////////////
      const myObject = new MyClass();

      //128---------------- data insert and update------------------------
      $("#quiz_submit").click(function () {
        var buttonValue = $(this).val();
        var quiz1 = $("#quiz1").val();
        var quiz2 = $("#quiz2").val();
        var quiz3 = $("#quiz3").val();
        var quiz4 = $("#quiz4").val();
        var quiz5 = $("#quiz5").val();
        var Answer1 = $("#Answer1").val();  
        var Answer2 = $("#Answer2").val();
        var Answer3 = $("#Answer3").val();
        var Answer4 = $("#Answer4").val();
        var Answer5 = $("#Answer5").val();                   

        if (quiz1 == "" && quiz2 == "" && quiz3 == "" && quiz4 == "" && quiz5 == "" && Answer1 == "" && Answer2 == "" && Answer3 == "" && Answer4 == "" && Answer5 == "") {
              myObject.showAlertnull(buttonValue);
            } else {

              $.ajax({
                type: "POST",
                url: "backCode/front_backend.php", // Your PHP script URL
                data: {
                  buttonValue: buttonValue,
                  quiz1: quiz1,
                  quiz2: quiz2,
                  quiz3: quiz3,
                  quiz4: quiz4,
                  quiz5: quiz5,
                  Answer1: Answer1,
                  Answer2: Answer2,
                  Answer3: Answer3,
                  Answer4: Answer4,
                  Answer5: Answer5
                }, // Data to be sent to the server
                success: function (response) {
                    // Display the response in the result div
                    //Swal.fire(response);
                    //$("#result").html(response);
                    $("#quiz1").val("");
                    $("#quiz2").val("");
                    $("#quiz3").val("");
                    $("#quiz4").val("");
                    $("#quiz5").val("");
                    $("#Answer1").val("");        
                    $("#Answer2").val("");
                    $("#Answer3").val("");
                    $("#Answer4").val("");
                    $("#Answer5").val("");                                                
                   //myObject.showAlertcompleted(buttonValue);
                   //location.reload();
                }
              });
            }
        
      });  
      
      //124----------cancel section ---------------------------------
       $("#quiz_cancel").click(function () {
                    $("#quiz1").val("");
                    $("#quiz2").val("");
                    $("#quiz3").val("");
                    $("#quiz4").val("");
                    $("#quiz5").val("");
                    $("#Answer1").val("");        
                    $("#Answer2").val("");
                    $("#Answer3").val("");
                    $("#Answer4").val("");
                    $("#Answer5").val("");       
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
      <h1>Edit front home page (Quiz)</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Interface Upgrade Section</li>
          <li class="breadcrumb-item active">Modernization 4</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add QUIZ</h5>

              <!-- General Form Elements -->
                <form>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="QUIZ 1" id="quiz1">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="QUIZ 2" id="quiz2">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="QUIZ 3" id="quiz3">
                  </div>
                </div>    
                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="QUIZ 4" id="quiz4">
                  </div>
                </div>   
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="QUIZ 5" id="quiz5">
                  </div>
                </div>          
                <hr/>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Answer 1" id="Answer1"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Answer 2" id="Answer2"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Answer 3" id="Answer3"></textarea>
                  </div>
                </div>      

                <div class="row mb-3">          
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Answer 4" id="Answer4"></textarea>
                  </div>
                </div>       

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" placeholder="Answer 5" id="Answer5"></textarea>
                  </div>
                </div>       
                                                                
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" id="quiz_submit" value="128">Submit</button>
                    <button type="submit" class="btn btn-secondary" id="quiz_cancel" value="129">Cancel</button>
                  </div>
                </div>

             <!-- End General Form Elements -->
                </form>
            </div>
          </div>

        </div>

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">QUIZ</h5>

              <!-- Advanced Form Elements -->
              <table class="table">
                <tbody id="viewdataqiz">
                  <tr>
                  <th scope="col">quiz 1</th>
                    <td id="">Brandon Jacob</td>
                  </tr>      
                  <tr>
                  <th scope="col">quiz 2</th>
                    <td id="">Brandon Jacob</td>
                  </tr>        
                  <tr>
                  <th scope="col">quiz 3</th>
                    <td id="">Brandon Jacob</td>
                  </tr>        
                  <tr>
                  <th scope="col">quiz 4</th>
                    <td id="">Brandon Jacob</td>
                  </tr>        
                  <tr>
                  <th scope="col">quiz 5</th>
                    <td id="">Brandon Jacob</td>
                  </tr>                
                  <tr>
                  <th scope="col">quiz 6</th>
                    <td id="">Brandon Jacob</td>
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