<?php
include_once 'db.php';
if(isset($_GET['remove_id']))
{
	$res=mysqli_query($conn,"SELECT image FROM users WHERE id=".$_GET['remove_id']);
	$row=mysqli_fetch_array($res);
	mysqli_query($conn,"DELETE FROM users WHERE id=".$_GET['remove_id']);
	unlink("upload/".$row['image']);
	header("Location: view.php");
}
?>