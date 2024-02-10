<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
 <?php
 include 'connection.php';
//   include '../myweb/sidebar.php'; 
$query = "select * from upload";
$queryc = mysqli_query($connection ,$query);
$query1 = "select * from upload ORDER BY Date_time";
$queryc1= mysqli_query($connection,$query1);
?>
<table class="table align-items-center mb-0" border="5">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date & Time</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Buy</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">For Delete</th>
                      <th class="text-secondary opacity-7"></th></tr>
    <?php
if($queryc -> num_rows > 0 || $queryc1 -> num_rows > 0)
{   
    while($row = $queryc->fetch_assoc())
    {
        $imageURL='upload/'.$row["img_name"];
       // $pdf='upload/'.$row["img_name"];
        ?>
       <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <image src="<?php echo $imageURL;?>" height="150" width="300">
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $row['Date_time'];?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $row['img_name'];?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?php echo $row['status'];?></span>
                      </td>
                      <td class="align-middle text-center">
                      <a href='Delete.php?id=<?php echo $row['id'] ?>'>delete</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
    <?php }?>
 </table>
<form align="center">
    <p></br></p>
 <input type="image" value="Buy" src="/pages/temp/cartimg.png" width="120" name="cart">
    </form>
<?php }
    else
    {
        ?> <p>No image(s) found....</p>
        <?php 
    } 
?>
