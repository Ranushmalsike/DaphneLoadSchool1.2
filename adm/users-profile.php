<?php

session_start();
if($_SESSION['emp'] != ""){
//echo $_SESSION['emp'] .'<br/>'. $_SESSION['makeSessionVR'] .'<br/>';
$countVRB = $_SESSION['makeSessionVR'];
  for ($i=1; $i <= $countVRB; $i++) { 
     if($_SESSION['code_'.$i] == "dpnCol101"){
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
      // msg box
      var msgbxInstance = new msgbx();
      //154
      $('#add_teachers_details_154').click(function () {
        var buttonValue = $(this).val();
        var sessionID = <?= $_SESSION['emp'] ?>;
        var frstName = $('#frstName').val();
        var lstnName = $('#lstName').val();
        var adr = $('#adr').val();
        var eml = $('#eml').val();
        var nic = $('#nic').val();
        var cnfnm = $('#cnfnm').val();
        var fileInput = $('#imgusr')[0];
        var formData = new FormData();
        formData.append('buttonValue', buttonValue);
        formData.append('frstName', frstName);
        formData.append('lstnName', lstnName);
        formData.append('adr', adr);
        formData.append('eml', eml);
        formData.append('nic', nic);
        formData.append('sessionID', sessionID);
        formData.append('cnfnm', cnfnm);
        formData.append('file', fileInput.files[0]);
        $.ajax({
          url: 'backCode/front_backend.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function (data) {
            msgbxInstance.okCompleted();
            //alert(data);
          }
        });
      });
      //showValue
      function showdata() {
        var buttonValue = "155";
        //var sessionID = ;
        //alert(sessionID);
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
            $("#frstTextName").text(data.frist_name);
            $("#lastTextName").text(data.last_name);
            $("#adrText").text(data.address);
            $("#ctsText").text(data.contact_number);
            $("#emlText").text(data.email);
            $("#nicText").text(data.NIC);
            $("#picText").html("<img  src='backCode/uploadImage/" + data.image +
              "' alt='Profile' class='rounded-circle'>");
            $("#picText2").html("<img  src='backCode/uploadImage/" + data.image +
              "' alt='Profile' class='rounded-circle'>");
          }
        });
      }
      showdata();
      /////////////////////////////////
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
      //156 teacher
      $('#chang_teacher_pass_156').click(function () {
        var buttonValue = $(this).val();
        var sessionID = <?= $_SESSION['emp'] ?>;
        //var username = $('#username').val();
        var usrpass = $('#usrpass').val();
        if (usrpass.length < 8) {
          msgbxInstance.passwordval();
        } else {
          $.ajax({
            url: 'backCode/front_backend.php',
            type: 'POST',
            data: {
              buttonValue: buttonValue,
              usrpass: usrpass,
              sessionID : sessionID
            },
            success: function (data) {
              msgbxInstance.okCompleted();
            }
          });
        }
      });
      //251 adm
      $('#chang_adm_pass_156').click(function () {
        var buttonValue = $(this).val();
        var sessionID = <?= $_SESSION['emp'] ?>;
        //var username = $('#username').val();
        var usrpass = $('#usrpass').val();
        //alert(usrpass);
        if (usrpass.length < 8) {
          msgbxInstance.passwordval();
        } else {
          $.ajax({
            url: 'backCode/front_backend.php',
            type: 'POST',
            data: {
              buttonValue: buttonValue,
              usrpass: usrpass,
              sessionID : sessionID
            },
            success: function (data) {
              msgbxInstance.okCompleted();
            }
          });
        }
      });     
      //252 supper user
      $('#chang_supperuser_pass_156').click(function () {
        var buttonValue = $(this).val();
        var sessionID = <?= $_SESSION['emp'] ?>;
        //var username = $('#username').val();
        var usrpass = $('#usrpass').val();
        if (usrpass.length < 8) {
          msgbxInstance.passwordval();
        } else {
          $.ajax({
            url: 'backCode/front_backend.php',
            type: 'POST',
            data: {
              buttonValue: buttonValue,
              usrpass: usrpass,
              sessionID : sessionID
            },
            success: function (data) {
              msgbxInstance.okCompleted();
            }
          });
        }
      });         
      //showValue
      function showdata2() {
        
        var sessioncode = <?= $_SESSION['emp'] ?>;

        //adm
        if(sessioncode == "1"){

        var buttonValue = "157_3";
       
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
            $("#usernameadm").val(data.user_name);
            $("#admEmail2").text(data.email);
          
          }
        });

        }
        //supper user
        else if(sessioncode < "10"){
          //alert();
        var buttonValue = "157_2";
       
        //alert(sessionID);
        $.ajax({
          url: 'backCode/front_backend.php',
          type: 'POST',
          data: {
            buttonValue: buttonValue
          },
          dataType: 'json',
          success: function (data) {
            //Swal.fire(data);
            //alert(data.user_name);
            $("#usernametach").val(data.user_name);
             $("#spuEmail").text(data.email);
          }
        });
        }

        //teacher
        else{

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

      }
      showdata2();

  //add adm email    
 $('#btn_add_adm_email254').click(function (e) { 
  //e.preventDefault();
  var buttonValue = $(this).val();
  var myEmail = $('#admEmail').val();
  //alert(myEmail);
  $.ajax({
    type: "POST",
    url: "backCode/front_backend.php",
    data: {
        buttonValue : buttonValue,
        myEmail : myEmail
    },
    success: function (response) {
      msgbxInstance.okCompleted();
    }
  });
 });

   //add supper email    
 $('#btn_add_spu_email255').click(function (e) { 
  //e.preventDefault();
  var buttonValue = $(this).val();
  var myEmail = $('#spuEmailin').val();
  //alert(myEmail);
  $.ajax({
    type: "POST",
    url: "backCode/front_backend.php",
    data: {
        buttonValue : buttonValue,
        myEmail : myEmail
    },
    success: function (response) {
      msgbxInstance.okCompleted();
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
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">My Profile</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<?php
// section of adm
if($_SESSION['emp'] == "1"){
  ?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card"> 
            <div class="card-body pt-3">
              
                <input type="email" id="admEmail" name="admEmail" placeholder="Add your email" class="form-control" />
                <hr>
                <p id="admEmail2"></p>
                <hr>
                <button class="btn btn-primary" id="btn_add_adm_email254" value="254">Add My email</button>
              </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                    Password</button>
                </li>
              </ul>
              
                
                
                <div class="tab-pane pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="usernameadm" class="form-control" id="usernameadm" placeholder="User Name"
                        disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" class="form-control" name="usrpass" id="usrpass" placeholder="Password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Notice</label>
                    <div class="col-md-8 col-lg-9">
                      <p id="password-error">********</p>
                      <p>Use a minimum of 12 characters. Longer passwords are generally more secure<p>
                          <p>Include a mix of uppercase and lowercase letters.</p>
                          <p>Include special characters (e.g., !, @, #, $, %).</p>
                        </p>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-success" id="chang_adm_pass_156" value="251">Save</button>
                  </div>
                  <!-- End Change Password Form -->
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
}
//supper user
elseif ($_SESSION['emp'] < "10"){
  ?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card"> 
            <div class="card-body pt-3">
              
                <input type="email" id="spuEmailin" name="spuEmailin" placeholder="Add your email" class="form-control" />
                <hr>
                <p id="spuEmail"></p>
                <hr>
                <button class="btn btn-primary" id="btn_add_spu_email255" value="255">Add My email</button>
              </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                    Password</button>
                </li>
              </ul>
              
                <div class="tab-pane pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="usernametach" class="form-control" id="usernametach" placeholder="User Name"
                        disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" class="form-control" name="usrpass" id="usrpass" placeholder="Password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Notice</label>
                    <div class="col-md-8 col-lg-9">
                      <p id="password-error">********</p>
                      <p>Use a minimum of 12 characters. Longer passwords are generally more secure<p>
                          <p>Include a mix of uppercase and lowercase letters.</p>
                          <p>Include special characters (e.g., !, @, #, $, %).</p>
                        </p>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-success" id="chang_supperuser_pass_156" value="252">Save</button>
                  </div>
                  <!-- End Change Password Form -->
                </div>
              <!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
}
//Teacher Section
if($_SESSION['emp'] > "10"){
?>
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <div id="picText"></div>
              <h2> <span id="frstTextName"></span> <span id="lastTextName"></span></h2>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab"
                    data-bs-target="#profile-overview">Overview</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                    Password</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">
                      <p id="adrText"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact Number</div>
                    <div class="col-lg-9 col-md-8">
                      <p id="ctsText"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">
                      <p id="emlText"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NIC</div>
                    <div class="col-lg-9 col-md-8">
                      <p id="nicText"></p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <div id="picText2"></div>
                      <div class="pt-2">
                        <input type="file" class="form-control" name="imgusr" id="imgusr" placeholder="image">
                        <br />
                        <p style="color:red;">If you want to crop your image choose the below link (and keep
                          your mind image size is (320 x 180))<a href="https://fengyuanchen.github.io/cropperjs/"
                            target="_blank"> Crop image
                          </a></p>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="frstName" class="form-control" id="frstName" placeholder="First Name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" class="form-control" name="lstName" id="lstName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Address</label>
                    <div class="col-md-8 col-lg-9">
                      <textarea class="form-control" name="adr" id="adr" rows="3" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">NIC</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" class="form-control" name="nic" id="nic" placeholder="NIC / Passport">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="email" class="form-control" name="eml" id="eml" placeholder="Email">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Contact Number</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="number" class="form-control" name="cnfnm" id="cnfnm" placeholder="Contact Number">
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-success" id="add_teachers_details_154" value="154">Save</button>
                  </div>
                  <!-- End Profile Edit Form -->
                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="username" class="form-control" id="username" placeholder="User Name"
                        disabled>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" class="form-control" name="usrpass" id="usrpass" placeholder="Password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Notice</label>
                    <div class="col-md-8 col-lg-9">
                      <p id="password-error">********</p>
                      <p>Use a minimum of 12 characters. Longer passwords are generally more secure<p>
                          <p>Include a mix of uppercase and lowercase letters.</p>
                          <p>Include special characters (e.g., !, @, #, $, %).</p>
                        </p>
                    </div>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-success" id="chang_teacher_pass_156" value="156">Save</button>
                  </div>
                  <!-- End Change Password Form -->
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
     }
     
    ?>
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