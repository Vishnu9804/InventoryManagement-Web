<!DOCTYPE html>
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
<!-- <body>  

   
</body> -->
<body class="g-sidenav-show  bg-gray-200">
<?php include '../myweb/sidebar.php';?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4" >
      <!-- <div class="row"> -->
        <div class="col-10">
          <div class="card my-10">
            <div class="card-header p-0 position-relative mt-n4 mx-8 z-index-0">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-1 pb-3">
                <h6 class="text-white text-capitalize text-center ps-0">Add your Product</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-6">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                <form action="Choconotification.php" class="btn bg-gradient-primary" method="post" enctype="multipart/form-data">
        <div class="text-center">
                     Upload Product :-
                    <input type="file" value="file" name="file" class="btn bg-gradient-primary w-12 my-3 mb-2">
                  </div>
        <div class="text-center">
                    
                    <input type="submit" value="Upload" name="submit" class="btn bg-gradient-primary w-12 my-3 mb-2">
                  
    </form>
    </div>
                </table>
              
                
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