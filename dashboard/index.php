<?php require_once('assets/includes/header.php'); ?>

<div class="side_menu">
  <a href="index.html" class="active_menu"><i class="fa-solid fa-chart-line"></i> <span>Dashborad</span> </a>

  <a href="#"><i class="fa-solid fa-person-digging"></i> <span>Workers</span> </a>

  <a href="#"><i class="fa-solid fa-user-check"></i> <span>Employers</span> </a>

  <a href="#"><i class="fa-solid fa-filter"></i> <span>Filter</span> </a>

  <a href="#"><i class="fa-solid fa-tag"></i> <span>Tasks</span> </a>
  <a href="#"><i class="fa-solid fa-credit-card"></i> <span>Transaction</span> </a>
  <a href="#"><i class="fa-solid fa-comments-dollar"></i> <span>Withdrawal Request</span> </a>
  <a href="#"><i class="fa-solid fa-headphones-simple"></i> <span>Support</span> </a>
  <a href="#"><i class="fa-solid fa-gear"></i> <span>Setting</span> </a>
  <a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Log out</span></a>
</div>
<div class="page_continer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="heading mb-5">
          <h1><strong> <span class="red">!</span>Welcome, <span class="red"> Noor</span> </strong></h1>
        </div>
      </div>

    </div>

    <!-- dashboard stats row   -->
    <div class="row dash-stats ">
      <div class="col-md-12">
        <div class="heading mb-4">
          <h4>User Status</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row box_row gy-4">
          <!-- box-1  -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Employers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>
          <!-- box-2  -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Workers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- dashboard stats row   -->
    <div class="row dash-stats">
      <div class="col-md-12">
        <div class="heading mb-4">
          <h4>Tasks Status</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row box_row gy-4 ">
          <!-- box-1  -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Employers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>
          <!-- box-2  -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Workers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>
          <!-- box-3 -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Workers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- dashboard stats row   -->
    <div class="row dash-stats">
      <div class="col-md-12">
        <div class="heading mb-4">
          <h4>Revenue Status</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row box_row gy-4">
          <!-- box-1  -->
          <div class="col col-sm-6 col-xl-4">
            <div class="box">
              <div class="content d-flex align-items-center justify-content-between">
                <div class="left">
                  <p class="mb-0 blue-text">Total Employers</p>
                  <p class="mb-0 para">50</p>
                </div>
                <div class="right">
                  <img src="assets/images/taskk.png">
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>

  </div>
</div>
<?php require_once('assets/includes/footer.php'); ?>

<!-- Optional JavaScript; choose one of the two! -->
<script>
  $(document).ready(function () {
    $(".hamburger").click(function () {
      $(".side_menu").toggleClass("display");
    });
  });

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 130) {
        // $('.side_menu').css({'position': 'fixed', "top": "0px"});
        $('.side_menu').addClass("fixed");
      } else if ($(window).scrollTop() < 130) {
        // $('.side_menu').css({'position': 'absolute', "top": "33%"});
        $('.side_menu').removeClass("fixed");
      }
    });
  });
</script>