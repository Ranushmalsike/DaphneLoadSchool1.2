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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/msgBox.js"></script>
  <!-- Magnific Popup CSS and JavaScript -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  
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
        <h1>Frequently Asked Questions</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Interface Upgrade section</li>
            <li class="breadcrumb-item active">Frequently Asked Questions</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->

      <section class="section faq">
        <div class="row">
          <div class="col-lg-6">
            <div class="card basic">
              <div class="card-body">
                <h5 class="card-title">Basic Questions</h5>

                <div>
                  <h6>
                    1. Nisi ut ut exercitationem voluptatem esse sunt rerum?
                  </h6>
                  <p>
                    Saepe perspiciatis ea. Incidunt blanditiis enim mollitia qui
                    voluptates. Id rem nulla tenetur nihil in unde rerum. Quae
                    consequatur placeat qui cumque earum eius omnis quos.
                  </p>
                </div>

                <div class="pt-2">
                  <h6>2. Reiciendis dolores repudiandae?</h6>
                  <p>
                    Id ipsam non ut. Placeat doloremque deserunt quia tenetur
                    inventore laboriosam dolores totam odio. Aperiam incidunt
                    et. Totam ut quos sunt atque modi molestiae dolorem.
                  </p>
                </div>

                <div class="pt-2">
                  <h6>
                    3. Qui qui reprehenderit ut est illo numquam voluptatem?
                  </h6>
                  <p>
                    Enim inventore in consequuntur ipsam voluptatem consequatur
                    beatae. Nostrum consequuntur voluptates et blanditiis.
                  </p>
                </div>
              </div>
            </div>

            <!-- F.A.Q Group 1 -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Laborum dolorem quam porro</h5>

                <div class="accordion accordion-flush" id="faq-group-1">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsOne-1"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Debitis adipisci eius?
                      </button>
                    </h2>
                    <div
                      id="faqsOne-1"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-1"
                    >
                      <div class="accordion-body">
                        Ut quasi odit odio totam accusamus vero eius. Nostrum
                        asperiores voluptatem eos nulla ab dolores est
                        asperiores iure. Quo est quis praesentium aut maiores.
                        Corrupti sed aut expedita fugit vero dolorem. Nemo rerum
                        sapiente. A quaerat dignissimos.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsOne-2"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Omnis fugiat quis repellendus?
                      </button>
                    </h2>
                    <div
                      id="faqsOne-2"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-1"
                    >
                      <div class="accordion-body">
                        In minus quia impedit est quas deserunt deserunt et.
                        Nulla non quo dolores minima fugiat aut saepe aut
                        inventore. Qui nesciunt odio officia beatae iusto sed
                        voluptatem possimus quas. Officia vitae sit voluptatem
                        nostrum a.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsOne-3"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Et occaecati praesentium aliquam modi incidunt?
                      </button>
                    </h2>
                    <div
                      id="faqsOne-3"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-1"
                    >
                      <div class="accordion-body">
                        Voluptates magni amet enim perspiciatis atque excepturi
                        itaque est. Sit beatae animi incidunt eum repellat sequi
                        ea saepe inventore. Id et vel et et. Nesciunt itaque
                        corrupti quia ducimus. Consequatur maiores voluptatum
                        fuga quod ut non fuga.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsOne-4"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Quo unde eaque vero dolor quis ipsam?
                      </button>
                    </h2>
                    <div
                      id="faqsOne-4"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-1"
                    >
                      <div class="accordion-body">
                        Numquam ut reiciendis aliquid. Quia veritatis quasi
                        ipsam sed quo ut eligendi et non. Doloremque sed
                        voluptatem at in voluptas aliquid dolorum.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsOne-5"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Natus sunt quo atque mollitia accusamus?
                      </button>
                    </h2>
                    <div
                      id="faqsOne-5"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-1"
                    >
                      <div class="accordion-body">
                        Aut necessitatibus maxime quis dolor et. Nihil
                        laboriosam molestiae qui molestias placeat corrupti non
                        quo accusamus. Nemo qui quis harum enim sed. Aliquam
                        molestias pariatur delectus voluptas quidem qui rerum id
                        quisquam. Perspiciatis voluptatem voluptatem eos. Vel
                        aut minus labore at rerum eos.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End F.A.Q Group 1 -->
          </div>

          <div class="col-lg-6">
            <!-- F.A.Q Group 2 -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Deserunt ut unde corporis</h5>

                <div class="accordion accordion-flush" id="faq-group-2">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsTwo-1"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Cumque voluptatem recusandae blanditiis?
                      </button>
                    </h2>
                    <div
                      id="faqsTwo-1"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-2"
                    >
                      <div class="accordion-body">
                        Ut quasi odit odio totam accusamus vero eius. Nostrum
                        asperiores voluptatem eos nulla ab dolores est
                        asperiores iure. Quo est quis praesentium aut maiores.
                        Corrupti sed aut expedita fugit vero dolorem. Nemo rerum
                        sapiente. A quaerat dignissimos.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsTwo-2"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Provident beatae eveniet placeat est aperiam repellat
                        adipisci?
                      </button>
                    </h2>
                    <div
                      id="faqsTwo-2"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-2"
                    >
                      <div class="accordion-body">
                        In minus quia impedit est quas deserunt deserunt et.
                        Nulla non quo dolores minima fugiat aut saepe aut
                        inventore. Qui nesciunt odio officia beatae iusto sed
                        voluptatem possimus quas. Officia vitae sit voluptatem
                        nostrum a.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsTwo-3"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Minus aliquam modi id reprehenderit nihil?
                      </button>
                    </h2>
                    <div
                      id="faqsTwo-3"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-2"
                    >
                      <div class="accordion-body">
                        Voluptates magni amet enim perspiciatis atque excepturi
                        itaque est. Sit beatae animi incidunt eum repellat sequi
                        ea saepe inventore. Id et vel et et. Nesciunt itaque
                        corrupti quia ducimus. Consequatur maiores voluptatum
                        fuga quod ut non fuga.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsTwo-4"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Quaerat qui est iusto asperiores qui est reiciendis eos
                        et?
                      </button>
                    </h2>
                    <div
                      id="faqsTwo-4"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-2"
                    >
                      <div class="accordion-body">
                        Numquam ut reiciendis aliquid. Quia veritatis quasi
                        ipsam sed quo ut eligendi et non. Doloremque sed
                        voluptatem at in voluptas aliquid dolorum.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsTwo-5"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Laboriosam asperiores eum?
                      </button>
                    </h2>
                    <div
                      id="faqsTwo-5"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-2"
                    >
                      <div class="accordion-body">
                        Aut necessitatibus maxime quis dolor et. Nihil
                        laboriosam molestiae qui molestias placeat corrupti non
                        quo accusamus. Nemo qui quis harum enim sed. Aliquam
                        molestias pariatur delectus voluptas quidem qui rerum id
                        quisquam. Perspiciatis voluptatem voluptatem eos. Vel
                        aut minus labore at rerum eos.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End F.A.Q Group 2 -->

            <!-- F.A.Q Group 3 -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Dolore occaecati ducimus quam</h5>

                <div class="accordion accordion-flush" id="faq-group-3">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsThree-1"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Assumenda doloribus est fugiat sint incidunt animi totam
                        nisi?
                      </button>
                    </h2>
                    <div
                      id="faqsThree-1"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-3"
                    >
                      <div class="accordion-body">
                        Ut quasi odit odio totam accusamus vero eius. Nostrum
                        asperiores voluptatem eos nulla ab dolores est
                        asperiores iure. Quo est quis praesentium aut maiores.
                        Corrupti sed aut expedita fugit vero dolorem. Nemo rerum
                        sapiente. A quaerat dignissimos.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsThree-2"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Consequatur saepe explicabo odio atque nisi?
                      </button>
                    </h2>
                    <div
                      id="faqsThree-2"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-3"
                    >
                      <div class="accordion-body">
                        In minus quia impedit est quas deserunt deserunt et.
                        Nulla non quo dolores minima fugiat aut saepe aut
                        inventore. Qui nesciunt odio officia beatae iusto sed
                        voluptatem possimus quas. Officia vitae sit voluptatem
                        nostrum a.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsThree-3"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Voluptates vel est fugiat molestiae rem sit eos sint?
                      </button>
                    </h2>
                    <div
                      id="faqsThree-3"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-3"
                    >
                      <div class="accordion-body">
                        Voluptates magni amet enim perspiciatis atque excepturi
                        itaque est. Sit beatae animi incidunt eum repellat sequi
                        ea saepe inventore. Id et vel et et. Nesciunt itaque
                        corrupti quia ducimus. Consequatur maiores voluptatum
                        fuga quod ut non fuga.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsThree-4"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Ab ipsa cum autem voluptas doloremque velit?
                      </button>
                    </h2>
                    <div
                      id="faqsThree-4"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-3"
                    >
                      <div class="accordion-body">
                        Numquam ut reiciendis aliquid. Quia veritatis quasi
                        ipsam sed quo ut eligendi et non. Doloremque sed
                        voluptatem at in voluptas aliquid dolorum.
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button
                        class="accordion-button collapsed"
                        data-bs-target="#faqsThree-5"
                        type="button"
                        data-bs-toggle="collapse"
                      >
                        Aliquam magni ducimus facilis numquam dolorum harum
                        eveniet iusto?
                      </button>
                    </h2>
                    <div
                      id="faqsThree-5"
                      class="accordion-collapse collapse"
                      data-bs-parent="#faq-group-3"
                    >
                      <div class="accordion-body">
                        Aut necessitatibus maxime quis dolor et. Nihil
                        laboriosam molestiae qui molestias placeat corrupti non
                        quo accusamus. Nemo qui quis harum enim sed. Aliquam
                        molestias pariatur delectus voluptas quidem qui rerum id
                        quisquam. Perspiciatis voluptatem voluptatem eos. Vel
                        aut minus labore at rerum eos.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End F.A.Q Group 3 -->
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
  <!-- ======= Footer ======= -->
    <?php
          $linkAdm_footer->admfooterfn();
        ?><!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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