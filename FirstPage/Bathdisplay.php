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
 <?php
 include 'connection.php';
  include '../myweb/sidebar.php'; 
$query = "select * from Bath";
$queryc = mysqli_query($connection ,$query);
$query1 = "select * from Bath ORDER BY Date_time";
$queryc1= mysqli_query($connection,$query1);
?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

<table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-8">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-7">Date & Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">For Delete</th>
                      <th class="text-secondary opacity-7"></th></tr>
    <?php
if($queryc -> num_rows > 0 || $queryc1 -> num_rows > 0)
{   
    while($row = $queryc->fetch_assoc())
    {
        $imageURL='Bath Accessories/'.$row["img_name"];
       // $pdf='upload/'.$row["img_name"];
        ?>
        <div>
            <tr align="center">
            <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                          <image src="<?php echo $imageURL;?>" height="150" width="300">
                            
                          </div>
                        </div>
                      </td>
                      <td align-middle text-center>
                        <p class="text-xs font-weight-bold mb-2"><?php echo $row['Date_time'];?></p>
                        
                      </td>
                      <td class="align-middle text-center">
                      <p class="text-xs text-secondary mb-0"><?php echo $row['img_name'];?></p>
                      </td>
                      <td class="align-middle text-center">
                      <a href='Bathdelete.php?id=<?php echo $row['id'] ?>'>delete</span>
                      </td>
                     
            </tr>

    </div>
    <?php }?>
 </table>
<!-- <form align="center" action="bill.php">
    <p></br></p>
 <input type="image" value="Buy" src="./upload/cartimg.png" width="120" name="cart">
    </form> -->
<?php }
    else
    {
        ?> <p>No image(s) found....</p>
        <?php 
    } 
?>
