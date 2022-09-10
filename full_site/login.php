<!-- header start -->
<?php require_once('assets/includes/header.php'); ?>

<main class="page_main login-main">
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <div class="form_container  bg-white ">
          <div class="heading text-center">
            <h1 class="form-heading">Sign In</h1>
          </div>
          <div class="login_form form-default">
            <form class="row g-4">
              <div class="col-md-12 relative">
                <input type="email" class="form-control input-lg" placeholder=" Email">
                <img src="assets/images/mail.png" class="input_img" width="20">
              </div>
              <div class="col-md-12 relative">
                <input type="Password" class="form-control input-lg" placeholder="Password">
                <img src="assets/images/pass.png" class="input_img" id="myInput" width="16">
                <i class="fas fa-eye-slash" id="togglePassword" onclick="myFunction()"></i>
              </div>
              <div class="col-md-12">
                <h6 class="text-red">Forgot Your Password?</h6>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn w-100 theme_green font-28 pt-2 pb-2">Log In</button>
                <p class="black-text text-center mt-4   font-20 mb-0">Don't Have an Account? <a href="#"
                    class="blu-text"> Create an Account</a> </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- footer -->
<?php require_once('assets/includes/footer.php'); ?>

<!-- Optional JavaScript; choose one of the two! -->
<script>
  $(document).ready(function () {
    $(".hamburger_menu").click(function () {
      $(".side_menuu").toggleClass("display");
    });
  });


  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>


<!-- <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="brand-logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="#">Browse Task</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="#">Create a Task</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link" href="#">About Us</a>
        </li>
      </ul>
    <div>
      <a href="#" class="green-button">Login</a>
      <a href="#" class="blue-button">Signup</a>
    </div>
    </div>
  </div>
</nav> -->