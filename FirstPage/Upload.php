<?php
//include 'connection.php';
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'ganpati');
$statusMsg = ' ';
//File upload path
$targetDir = "Sports/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['enter']))
{
    header('Location:Display.php');
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]))
{
    //allow specific file type
    $allowtypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType,$allowtypes))
    {
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath))
        {
            $insert = ("INSERT into upload (img_name,Date_time) Values ('".$fileName."',NOW())");
            $query = mysqli_query($conn,$insert);
            if($query)
            {
                $statusMsg = "The File ".$fileName." has been uploaded succefully.";
            }
            else
            {
                $statusMsg = "File upload is failed Pleas try again!!!!";
            }
        }
        else
        {
            $statusMsg = "There was an erroe uploading the file.";
        }
    }
    else
    {
        $statusMsg = "Only jpg,png,jpeg,gif,pdf files are allowed";
    }
}
else
{
    $statusMsg = "Please select the file.";
}
echo $statusMsg;

?>

<!DOCTYPE html>
<form action="Upload.php" method="post" class="text-start">
<input type="submit" name="enter" value="Show Table">
</form>
</html>