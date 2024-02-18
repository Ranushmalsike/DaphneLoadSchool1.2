<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol107"){
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js">
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <!------------------->
  <script>
    ///////////////////////////Message///////////////////////////////
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
    //////////////////////////////Action section////////////////////////    
    $(document).ready(function () {
      const myObject = new MyClass();
      //   $('.range_allowance').DataTable();
      $('.evt').DataTable({
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
            title: 'Daphne Collage (Classes Information)',
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
      $(".gallery").magnificPopup({
        delegate: "a.image-link",
        type: "image",
        gallery: {
          enabled: true
        }
      });
      // btnEventDelete class instead of ID
      $(".btnEventDelete").click(function () {
        var buttonValue = $(this).attr("class");
        var buttonValue1 = $(this).val();
        var buttonValue2 = $(this).closest("tr").find("img").attr("src");
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!"
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              type: "POST",
              url: "backCode/front_backend.php",
              data: {
                buttonValue: buttonValue,
                buttonValue1: buttonValue1,
                buttonValue2: buttonValue2
              },
              success: function (response) {
                // Swal.fire(response);
                Swal.fire({
                  position: "top-end",
                  icon: "success",
                  title: "your task saved",
                  showConfirmButton: false,
                  timer: 1500
                });
                window.location.href = "make_event.php";
              }
            });
          }
        });
        // Swal.fire(buttonValue);
      });
      //btn 129
      $("#event_submit_129").click(function () {
        var buttonValue = $(this).val();
        var title = $('#title').val();
        var description = $('#description').val();
        var fileInput = $('#formFile')[0];
        // Create FormData object to handle file upload
        var formData = new FormData();
        formData.append('buttonValue', buttonValue);
        formData.append('title', title);
        formData.append('description', description);
        formData.append('file', fileInput.files[0]);
        //Swal.fire(title);
        if (title == "" && description == "") {
          myObject.showAlertnull(buttonValue);
        } else {
          $.ajax({
            url: 'backCode/front_backend.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
              // Handle success response
              //Swal.fire(data);                            
              myObject.showAlertcompleted(data);
              $("#title").val("");
              $("#formFile").val("");
              $("#description").val("");
              location.reload();
              //console.log(data);
            },
            error: function (error) {
              // Handle error
              Swal.fire(error);
              console.error('Error:', error);
            }
          });
        }
      });
      //131-------------data view section ------------------------------------------
      /*class show_data {
        show_131() {
          var buttonValue = "131";
          $.ajax({
            type: "POST",
            url: "backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#show_data_event").html(response);
            }
          });
        }
      }
      var showdatanow = new show_data();
      showdatanow.show_131();*/
      ////////////////////////////////////Delete section////////////////////////
      /////////////////////////////Cancel section////////////////////////
      $("#event_cancel_130").click(function () {
        $("#title").val("");
        $("#formFile").val("");
        $("#description").val("");
        location.reload();
      });
      /////////////////////////////Delete section////////////////////////////
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
      <h1>Add Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Interface Upgrade section</li>
          <li class="breadcrumb-item active">Event</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Event</h5>
              <!-- General Form Elements -->
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Title" id="title">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="formFile" placeholder="Add Image">
                  <br />
                  <p>If you want to create card. you can use link <a href="https://www.canva.com/cards/">Make a event card</a></p>
                  <br/>
                  <p style="color:red;">If you want to crop your image choose the below link (and keep your mind image
                    size is (320 x 180))<a href="https://fengyuanchen.github.io/cropperjs/" target="_blank"> Crop image
                    </a></p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <textarea class="form-control" style="height: 100px" placeholder="Description"
                    id="description"></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" id="event_submit_129" value="129">Submit</button>
                  <button type="submit" class="btn btn-secondary" id="event_cancel_130" value="130">Cancel</button>
                </div>
              </div>
              <!-- End General Form Elements -->
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h5 class="card-title">Event Show</h5>
          <!-- Advanced Form Elements -->
          <table id="example" class="evt table display table-striped table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>publish date</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                                            $eventadd = new eventadd();
                                            $result = $eventadd->btn131($mysqli);
                                           // echo "no";
                                           // $idGen = 1;
                                             while ($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                            <td>{$row['event_header']}</td>
                                            <td>{$row['publish_date']}</td>
                                             <td><a href='#'>". substr($row['event_description'], 0, 100) . "</a></td>
                                              <td>
                                              <div class='gallery'>
                                                   <a href='backCode/uploadImage/{$row['image']}' class='image-link'>
                                                    <img src='backCode/uploadImage/{$row['image']}' height='80%' width='80%'>
                                                          </a>
                                                  </div>
                                              </td>
                                            <td>
                                                <button class='btn btn-danger btn-sm btnEventDelete' value='{$row['event_id']}'>Delete</button>
                                            </td>
                                        </tr>";
                                            }
                                        ?>
            </tbody>
          </table>
          <!-- End General Form Elements -->
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->\
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