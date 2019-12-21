<?php 
include("../configsever.php");
 @session_start();


 if (isset($_GET['id'])) 
{	
	$id =$_GET['id'];
	$sql="DELETE FROM san_pham where id=$id";
	if(mysqli_query($conn,$sql))
	{
		header("Location: danhsachsanpham.php");
		exit();
	}else
	{
		echo "ERROR";
	}

}

?>