<?php
include("db.php"); 
if(isset($_GET['delete']))
{
	$rowCount = count($_POST["checkbox"]);
	for($i=0;$i<$rowCount;$i++) 
	{

		$res=mysqli_query($conn,"SELECT image FROM users WHERE id=".$_POST['checkbox'][$i]);
		echo $res;
		$row=mysqli_fetch_array($res);
		mysqli_query($conn,"DELETE FROM users WHERE id=".$_POST['checkbox'][$i]);
		unlink("upload/".$row['image']);
	}
}
header("Location:view.php");
?>
