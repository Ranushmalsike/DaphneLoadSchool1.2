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
  <script>
    $(document).ready(function () {
      $('.deeppass').click(function () {
        var emid = $(this).data('id');
        var monthofemp = $(this).data('id2');
        alert("Under developing");

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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Control User <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-gear"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php
                        $adimin_and_supper_user = new adimin_and_supper_user();
                        echo $result223 = $adimin_and_supper_user->select_countuser($mysqli)->fetch_assoc()["suser"];
                      ?>
                      </h6>
                      <span class="text-success small pt-1 fw-bold"> </span> <span
                        class="text-muted small pt-2 ps-1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->
            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Teachers <span> </span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php
                       // $adimin_and_supper_user = new adimin_and_supper_user();
                        echo $result222 = $adimin_and_supper_user->select_countTech($mysqli)->fetch_assoc()["tech"];
                      ?>
                      </h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span
                        class="text-muted small pt-2 ps-1"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Revenue Card -->
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  
                  <div class="d-flex align-items-center">
                      <?php
                        $result221 = $adimin_and_supper_user->select_the_salary_month($mysqli)->fetch_assoc()["alltt"];
                      ?>
                    <h5 class="card-title">This Month All Total<span></span></h5>&nbsp;&nbsp;
                    <div class="d-flex" style="height: 100px;">
                      <div class="vr"></div>
                    </div>
                    
                    &nbsp;&nbsp;<h5 class="card-title">LKR : <?= $result221 ?><span></span></h5>
                  </div>
                </div>
              </div>
            </div><!-- End Customers Card -->
            <!-- Recent Sales -->
            <div class="col-12">

            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->
        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Top Salary This Month<span></span></h5>
              <div class="activity">
                <?php 
                        
                      $result2 = $adimin_and_supper_user->select_the_salary($mysqli);
                      // echo "no";
                   // $count = 0;
                  // $idGen = 1;
                  while ($row = $result2->fetch_assoc()) {
                ?>
                <div class="activity-item d-flex">
                  <div class="activite-label">LKR : <?= $row['Mtt'] ?></div>
                  <i class='bi bi-circle-fill activity-badge text-dark align-self-start'></i>
                  <div class="activity-content">
                    <i class="bi bi-person-circle"></i> <button class="deeppass btn btn-link btn-sm"
                      data-id="<?= $row['empid'] ?>" data-id2="<?= $row['empMonth'] ?>">
                      <?= $row['frist_name'] .'&nbsp;&nbsp;&nbsp;'. $row['last_name'] ?> </button>
                  </div>
                </div>
                <?php
                                            }
                  ?>
              </div>
            </div>
          </div><!-- End Recent Activity -->
          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Event &amp; Updates <span>| This Month</span></h5>
              <div class="news">
                <?php 
                  $result220 = $adimin_and_supper_user->select_event($mysqli);
                  while ($row220 = $result220->fetch_assoc()) {
                ?>
                <div class="post-item clearfix">
                  <img src="backCode/uploadImage/<?= $row220['image'] ?>" alt="<?= $row220['image'] ?>">
                  <h4><a href="<?= $row220['event_description'] ?>"><?= $row220['event_header'] ?></a></h4>
                  <p><?= substr($row220['event_description'], 0, 50) ?></p>
                </div>
                <div class="col-lg-1"></div>
                <?php
                   }
                  ?>
              </div><!-- End sidebar recent posts-->
            </div>
          </div><!-- End News & Updates -->
        </div><!-- End Right side columns -->
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