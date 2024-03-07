<?php 
require_once 'include/errorShow.php';
require_once 'include/front_header.php';
require_once 'include/front_footer.php';
require_once 'qry/daphne_variable.php';
require_once 'include/dbcon.php';
require_once 'qry/qry.php';

//error handle
$erro = new errodisplay();
//$error->display();



//use include/front_header.php/front_header;
$linkHeader = new front_header();
$footerfr = new  front_footer();
$vblsection2 = new  daphnescV();
$adimin_and_supper_user = new adimin_and_supper_user();
$contactUs = new contactUs();
$quizdetect = new quizdetect();
$commonKeyWord_footer = new commonKeyWord_footer();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link href="adm/assets/img/daphne.jpeg" rel="icon">
  
  <title><?php $vblsection2->title(); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- react js-->
  <script src="https://unpkg.com/react@17/umd/react.development.js"></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  
  <!--chatbot-->
<link rel="stylesheet" href="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/themes/df-messenger-default.css">
<script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
<df-messenger
  project-id="daphnesch"
  agent-id="aaff5402-ab0e-4f23-8431-7a05a8268ba0"
  language-code="en">
  <df-messenger-chat-bubble
   chat-title="Daphne">
  </df-messenger-chat-bubble>
</df-messenger>
<style>
  df-messenger {
    z-index: 999;
    position: fixed;
    bottom: 16px;
    right: 16px;
  }
</style>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function () {
      class show_data {
          //108
            show_108() {
              var buttonValue = "108";
              $.ajax({
                type: "POST",
                url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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


        //114---------data view section ------------------------------------------
        show_114() {
          var buttonValue = "114";
          $.ajax({
            type: "POST",
            url: "adm/backCode/front_backend.php", // Your PHP script URL
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
            url: "adm/backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#Vission").html(response);
            }
          });
        }

        //116------------ data view setion --------------------------------------------
        show_116() {
          var buttonValue = "116";
          $.ajax({
            type: "POST",
            url: "adm/backCode/front_backend.php", // Your PHP script URL
            data: {
              buttonValue: buttonValue,
            }, // Data to be sent to the server
            success: function (response) {
              // Display the response in the result div
              //Swal.fire(response);
              $("#Misssion").html(response);
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
      dataShower.show_114();
      dataShower.show_115();
      dataShower.show_116();

    /*  $("#sendMassagetoadmin").click(function (e) {
        // e.preventDefault();
        var buttonValue = $(this).val();
        var fame = $(selector).val();
        var lname = $(selector).val();
        var headr = $(selector).val();
        : var email = $(selector).val();
        var massage = $(selector).val();
        if ((fame == "" && lname == "" && headr == "" && email == "" && massage == "") || (fame == "" |"" || headr == "" || email == "" || massage == "")) {
          alert("Empty values");
        } else {    
          $.ajax({
            type: "POST",
            url: "adm/backCode/front_backend.php",
            data: {
              buttonValue : buttonValue,  
              fame : fame,
              lname : lname,
              headr : headr,
              email : email,
              massage : massage
            },
            success: function (response) {
                alert("Your message delivered");
            }
          });
        }
      });*/

    });
  </script>
</head>

<body>
  <!-- ======= Header ======= -->
  <!-- End Header -->
  <?php
  $linkHeader->headerfn();
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
         <h2><?php $vblsection2->title(); ?></h2>
          <div class="animate__animated animate__flipInY animate__delay-2s mb-5">
            <h3 id="mind_attract_show"></h3>

          </div>
          <!--div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div-->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/daphne.jpeg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <?php
            #we can add news
          ?>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p id="abUS1st_sec_show_pg1"></p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
              <li><i class="ri-check-double-line"></i>
                <p id="abUS_2nd_sec_show_1"></p>
              </li>
              <li><i class="ri-check-double-line"></i>
                <p id="abUS_2nd_sec_show_2"></p>
              </li>
              <li><i class="ri-check-double-line"></i>
                <p id="abUS_2nd_sec_show_3"></p>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Our vision <strong> and </strong> Mission</h3>
              <p id="small_paragraph">

              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Our
                    Vision <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p id="Vission">

                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>Our
                    Mission <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p id="Misssion">

                    </p>
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
            style='background-image: url("assets/img/sch.jpg");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <!--section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section-->
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event</h2>
          <p>This Month and on Forward event</p>
        </div>

        <div class="row">
          <?php 
                       
                      $result220 = $adimin_and_supper_user->select_event($mysqli);
                      // echo "no";
                   // $count = 0;
                  // $idGen = 1;
                  while ($row220 = $result220->fetch_assoc()) {
                ?>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <img src="adm/backCode/uploadImage/<?= $row220['image'] ?>" alt="<?= $row220['image'] ?>" hight="80%"
                width="80%">
              <h5><a href=""><?= $row220['event_header'] ?></a></h5>
              <p><?= substr($row220['event_description'], 0, 300) ?></p>
            </div>
             
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <?php
                   }
                  ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p id="cll_view_130"><?= 
                      $result230 = $contactUs->Homebtn125($mysqli)->fetch_assoc()["paragraph_call"] ?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#"><?= 
                      $result231 = $contactUs->Homebtn125($mysqli)->fetch_assoc()["telephone_number1"] ?></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team section-bg">-->
    <!--  <div class="container" data-aos="fade-up">-->

    <!--    <div class="section-title">-->
    <!--      <h2>Team</h2>-->

    <!--    </div>-->

    <!--    <div class="row">-->

    <!--      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">-->
    <!--        <div class="member d-flex align-items-start">-->
    <!--          <div class="pic">-->
    <!--            <img src="assets/img/user.png" class="img-fluid" alt="">-->
    <!--          </div>-->
    <!--          <div class="member-info">-->
    <!--            <h4>Walter White</h4>-->
    <!--            <span>Chief Executive Officer</span>-->
    <!--            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="ri-twitter-fill"></i></a>-->
    <!--              <a href=""><i class="ri-facebook-fill"></i></a>-->
    <!--              <a href=""><i class="ri-instagram-fill"></i></a>-->
    <!--              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">-->
    <!--        <div class="member d-flex align-items-start">-->
    <!--          <div class="pic"><img src="assets/img/user.png" class="img-fluid" alt=""></div>-->
    <!--          <div class="member-info">-->
    <!--            <h4>Sarah Jhonson</h4>-->
    <!--            <span>Product Manager</span>-->
    <!--            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="ri-twitter-fill"></i></a>-->
    <!--              <a href=""><i class="ri-facebook-fill"></i></a>-->
    <!--              <a href=""><i class="ri-instagram-fill"></i></a>-->
    <!--              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">-->
    <!--        <div class="member d-flex align-items-start">-->
    <!--          <div class="pic"><img src="assets/img/user.png" class="img-fluid" alt=""></div>-->
    <!--          <div class="member-info">-->
    <!--            <h4>William Anderson</h4>-->
    <!--            <span>CTO</span>-->
    <!--            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="ri-twitter-fill"></i></a>-->
    <!--              <a href=""><i class="ri-facebook-fill"></i></a>-->
    <!--              <a href=""><i class="ri-instagram-fill"></i></a>-->
    <!--              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">-->
    <!--        <div class="member d-flex align-items-start">-->
    <!--          <div class="pic"><img src="assets/img/user.png" class="img-fluid" alt=""></div>-->
    <!--          <div class="member-info">-->
    <!--            <h4>Amanda Jepson</h4>-->
    <!--            <span>Accountant</span>-->
    <!--            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="ri-twitter-fill"></i></a>-->
    <!--              <a href=""><i class="ri-facebook-fill"></i></a>-->
    <!--              <a href=""><i class="ri-instagram-fill"></i></a>-->
    <!--              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section><!-- End Team Section -->-->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Explore our Common Frequently Asked Questions for quick insights into queries that many individuals often
            have about our programs and services. We've curated this section to provide you with straightforward answers
            to common inquiries. If you have specific questions not covered here, please don't hesitate to contact us
            directly. Your curiosity is important to us, and we are here to ensure you have all the information you
            need. Thank you for considering </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">
                <p><?= $quizdetect->btn127home($mysqli , 0)->fetch_assoc()["quiz"] ?></p><i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  <?= $quizdetect->btn127home($mysqli , 0)->fetch_assoc()["answer"] ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                class="collapsed">
                <p><?= $quizdetect->btn127home($mysqli , 1)->fetch_assoc()["quiz"] ?></p><i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $quizdetect->btn127home($mysqli , 1)->fetch_assoc()["answer"] ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                class="collapsed">
                <p><?= $quizdetect->btn127home($mysqli , 2)->fetch_assoc()["quiz"] ?></p><i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $quizdetect->btn127home($mysqli , 2)->fetch_assoc()["answer"] ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                class="collapsed">
                <p><?= $quizdetect->btn127home($mysqli , 3)->fetch_assoc()["quiz"] ?></p><i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $quizdetect->btn127home($mysqli , 3)->fetch_assoc()["answer"] ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
                class="collapsed">
                <p><?= $quizdetect->btn127home($mysqli , 4)->fetch_assoc()["quiz"] ?></p><i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              </a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <?= $quizdetect->btn127home($mysqli , 4)->fetch_assoc()["answer"] ?>
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>We value your communication and welcome any inquiries you may have. Whether you're interested in enrolling
            in our programs, have questions about our services, or simply want to learn more, our dedicated team is here
            to assist you. Feel free to reach out through the provided contact details below, and we'll do our best to
            respond promptly. Your interest in Daphne College is important to us, and we look forward to connecting with
            you soon.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $contactUs->Homebtn125($mysqli)->fetch_assoc()["address"] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@daphnelordschoole.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?= $contactUs->Homebtn125($mysqli)->fetch_assoc()["telephone_number2"] ?></p>
              </div>

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="adm/backCode/travel_allovance.php" method="post"  class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading </div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="sendMassagetoadmin" value="250">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?php $vblsection2->title(); ?></h3>
            <p>
              <?= 
                      $contactUs->Homebtn125($mysqli)->fetch_assoc()["address"] ?><br>

              Sri lanka <br><br>
              <strong>Phone:</strong> <?= 
                      $contactUs->Homebtn125($mysqli)->fetch_assoc()["telephone_number2"] ?><br>
              <strong>Email:</strong> info@daphnelordschoole.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About US</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <img src="assets/img/daphne.jpeg" alt="" hight="80%" width="80%">
            Application : <a href="https://forms.gle/14j6CT5hmazrwUjS9">Apply</a>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us on Twitter for quick updates. Connect on Facebook for community discussions. Check out
              Instagram for behind-the-scenes visuals. Find us on LinkedIn for professional insights. Subscribe to our
              YouTube for video content. Join our diverse online community today!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span><?php $vblsection2->title(); ?></span></strong>. All Rights Reserved
      </div> -->
      <div class="credits">

        Designed by <a href="#"><?php $commonKeyWord_footer->comFooter(); ?></a>
      </div>
    </div>
  </footer>

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
