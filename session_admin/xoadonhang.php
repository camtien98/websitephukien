<?php require_once("../configsever.php");?>
<?php
@session_start();

if (isset($_SESSION['error'])) {
   echo "<script>alert('{$_SESSION['error']}');</script>";
   unset($_SESSION['error']);
}
 ?> 
<?php
 if (isset($_GET['delete'])) 
 {
    $id = $_GET['delete'];
    $tv="DELETE FROM hoa_don WHERE id = {$id} ";
     echo $tv;
    if(mysqli_query($conn,$tv))
    {
      
          header("location:../admin/quanly.php");
          
    }else
    {
        echo "Error deleting record".mysqli_error($conn);
    }

 }
 else
 {
     echo"KHÔNG NHẬN ĐƯỢC DỮ LIỆU";
 }
?>