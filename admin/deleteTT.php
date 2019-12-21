<?php 
include("../configsever.php");
 @session_start();


 if (isset($_GET['id'])) 
{	
	$id =$_GET['id'];
	$sql="DELETE FROM tin_tuc where id=$id";
	if(mysqli_query($conn,$sql))
	{
		header("Location: danhsachtintuc.php");
		exit();
	}else
	{
		echo "ERROR";
	}

}

?>