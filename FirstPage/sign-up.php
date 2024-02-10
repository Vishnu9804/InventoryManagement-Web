<?php
if (isset($_POST['enter'])) {
  header('Location:sign-in.php');
  $conn = mysqli_connect('localhost', 'root', '');
  $db = mysqli_select_db($conn, 'ganpati');
  $u_name = $_POST['u_name'];
  $u_pass = $_POST['u_pass'];
  $u_email = $_POST['u_email'];
  $u_number = $_POST['u_number'];
  $u_gender = $_POST['u_gender'];
  $u_dob = $_POST['u_date'];
  $query = "insert into reg (password,email,name,gender,number,date) values ('$u_pass','$u_email','$u_name','$u_gender','$u_number','$u_dob')";
  $result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  Product Managment
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form role="form" role="form" action="sign-up.php" method="post">
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">User Name :-</label>
                      <input type="text" name="u_name" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Email :- </label>
                      <input type="email" name="u_email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Password :- </label>
                      <input type="password" name="u_pass" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <label class="form-label">Phone No :- </label>
                      <input type="number" name="u_number" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <input class="form-radio" type="radio" value="Male" name="u_gender">Male</input>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <input type="radio" class="form-radio" value="Female" name="u_gender">Female</input>
                    </div>
                    <div class="input-group input-group-outline mb-4">
                      <input type="radio" class="form-radio" value="Other" name="u_gender">Other</input>
                    </div>
                    <div>
                    <label class="form-label">Date of Birth :- </label>
                      <input type="date" value="date" name="u_date">
                    </div>
                    <!-- <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div> -->
                    <div class="text-center mb-0">
                      <input type="submit" name="enter" value="Sign Up" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>