<?php require_once("../configsever.php");?>
<?php
@session_start();

if (isset($_SESSION['error'])) {
   echo "<script>alert('{$_SESSION['error']}');</script>";
   unset($_SESSION['error']);
}
 ?> 
<?php
 if (isset($_GET['duyet'])) 
 {
    $id = $_GET['duyet'];
    $tv="UPDATE hoa_don SET trang_thai='Đã Duyệt'  WHERE id = {$id} ";
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
<?php
 if (isset($_GET['huy'])) 
 {
    $id = $_GET['huy'];
    $tv="UPDATE hoa_don SET trang_thai='Hủy Đơn'  WHERE id = {$id} ";
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
