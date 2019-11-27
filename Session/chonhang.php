<?php
@session_start();

if (isset($_SESSION['error'])) {
   echo "<script>alert('{$_SESSION['error']}');</script>";
   unset($_SESSION['error']);
}
 ?> 
 <?php
 if (isset($_GET['chonhang'])) 
 {
    $id = $_GET['chonhang'];
   
       $_SESSION['giohang'][0]["id"] = $id;
       $_SESSION['giohang'][0]["soluong"] = 1;
       header("Location: ../order-by.php");
 }
 ?>