<?php
include 'connection.php';
if(isset($_GET['id']))
{
	$ids = $_GET['id'];
	$query = "delete from chocolates where id = '$ids'";
	$result = mysqli_query($connection,$query);
	if($result)
	{
		header('Location:Chocodisplay.php');
	}
	else
	{
		echo "Record is Not Deleted....";
	}		
}
?>