<?php

//front page header

class front_header{

    public function headerfn(){
      
      
?>

<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto animate__animated animate__flip animate__delay-2s"><a href="index.php">DLS</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About Us</a></li>
        <li><a class="nav-link scrollto" href="#services">Event</a></li>
        <!--li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li-->
        <li><a class="nav-link scrollto" href="#team">Teams</a></li>
        <!--li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li-->
        <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        <li><a class="getstarted scrollto" href="login/">sign in</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header>
<?php
    }
}


//adm header up

class adm_head{

  public $adm_v;

  public function __construct(){
    require_once '../qry/daphne_variable.php';
    $this->adm_v = new admpanel();
  }

  

 public function adm_header_full(){
  ?>

<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" alt="">
      <span class="d-none d-lg-block"><?php $this->adm_v->adm_header(); ?></span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->



  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">


      <div class="rounded-circle"><i class="bi bi-person-circle"></i></div>
       <span class="d-none d-md-block dropdown-toggle ps-2"><?=  $_SESSION['empName'] ?></span>

        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>


          <li>
            <hr class="dropdown-divider">
          </li>

          <!-- <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li> -->
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>
<?php
 }


//side header
/*
!ADM Section
*/
public function sideheader(){
  ?>
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
<?php
 if($_SESSION['emp'] == "1" || $_SESSION['emp'] < "10"){
?>
    <li class="nav-item">
      <a class="nav-link " href="index.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <?php
 }
    if($_SESSION['emp'] == "1" || $_SESSION['emp'] < "10"){
      ?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Interface Upgrade Section</span><i
          class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="front_homepg.php">
            <i class="bi bi-circle"></i><span>Modernization 1</span>
          </a>
        </li>
        <li>
          <!-- edit_sec2.php | components-accordion.html -->
          <a href="edit_sec2.php">
            <i class="bi bi-circle"></i><span>Modernization 2</span>
          </a>
        </li>
        <li>
          <a href="forms-elements.php">
            <i class="bi bi-circle"></i><span>Modernization 3</span>
          </a>
        </li>
        <li>
          <a href="qiz.php">
            <i class="bi bi-circle"></i><span>Modernization 4</span>
          </a>
        </li>
        <li>
          <a href="make_event.php">
            <i class="bi bi-circle"></i><span>Add event</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav -->
<?php
    }
        if($_SESSION['emp'] == "1" || $_SESSION['emp'] < "10"){
?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Administration Hub</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      
        <li>
          <a href="permisionVewall.php">
            <i class="bi bi-circle"></i><span>Permission</span>
          </a>
        </li>
        <li>
          <a href="teachers_contact.php">
            <i class="bi bi-circle"></i><span>Teacher Details</span>
          </a>
        </li>
        <li>
          <a href="reportOP.php">
            <i class="bi bi-circle"></i><span>Report</span>
          </a>
        </li>
          <li>
          <a href="Adm_check_techSalaryMonth.php">
            <i class="bi bi-circle"></i><span>Salary details</span>
          </a>
        </li>
        <li>
          <a href="teacher_daya_salary_details.php">
            <i class="bi bi-circle"></i><span>Define Hourly Pay Criteria</span>
          </a>
        </li>
        <li>
          <a href="travel_salary_details.php">
            <i class="bi bi-circle"></i><span>Transport Benefit Criteria</span>
          </a>
        </li>
        <li>
          <a href="salary_range.php">
            <i class="bi bi-circle"></i><span>Define Salary Bands</span>
          </a>
        </li>
        <li>
          <a href="add_aditional_allowance.php">
            <i class="bi bi-circle"></i><span>Detail Salary Criteria (Events/Extras)</span>
          </a>
        </li>
        <li>
          <a href="loanSection.php">
            <i class="bi bi-circle"></i><span>Credit Section</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->
<?php
    }
        if($_SESSION['emp'] == "1" || $_SESSION['emp'] < "10"){
?>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Establish Section</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="reg_supperuser.php">
            <i class="bi bi-circle"></i><span>Establish Administrator Starf</span>
          </a>
        </li>
        <li>
          <a href="make_class.php">
            <i class="bi bi-circle"></i><span>Establish Class</span>
          </a>
        </li>
        <li>
          <a href="make_subject.php">
            <i class="bi bi-circle"></i><span>Establish Subject And Schema</span>
          </a>
        </li>
        <li>
          <a href="techer_reg.php">
            <i class="bi bi-circle"></i><span>Enlist Educator</span>
          </a>
        </li>
        <li>
          <a href="make_timeTble.php">
            <i class="bi bi-circle"></i><span>Arrange Timetable</span>
          </a>
        </li>
        <li>
          <a href="summary_schema_add.php">
            <i class="bi bi-circle"></i><span>Summery Maintain</span>
          </a>
        </li>        
      </ul>
    </li><!-- End Charts Nav -->
<?php
    }
        if($_SESSION['emp'] > "10"){
?>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Drop Down</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="teachers_timeTble.php">
            <i class="bi bi-circle"></i><span>Approve Schedule</span>
          </a>
        </li>
        <li>
          <a href="teachers_activity.php">
            <i class="bi bi-circle"></i><span>My Performance</span>
          </a>
        </li>
        <li>
          <a href="summery_schema_teacher.php">
            <i class="bi bi-circle"></i><span>Summery Maintain</span>
          </a>
        </li>        
        <!-- <li>
          <a href="teachers_contact.php">
            <i class="bi bi-circle"></i><span>Teacher</span>
          </a>
        </li>
        <li>
          <a href="teacher_changepass.php">
            <i class="bi bi-circle"></i><span>Change the password</span>
          </a>
        </li> -->
      </ul>
    </li><!-- End Tables Nav -->
<?php
    }
?>
  </ul>

</aside>
<?php

}
}
?>