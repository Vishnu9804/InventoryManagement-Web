<?php
include 'connection.php';
if(isset($_GET['id']))
{
	$ids = $_GET['id'];
	$query = "delete from bath where id = '$ids'";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		header('Location:dashboard.php');
	}
	else
	{
		echo "Record is Not Deleted....";
	}		
}
?>