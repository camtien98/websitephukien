<?php 
    
    require("../configsever.php"); 
    if(isset($_GET['page'])){ 
          
        $pages=array("san_pham"); 
          
        if(in_array($_GET['page'], $pages)) { 
              
            $_page=$_GET['page']; 
              
        }else{ 
              
            $_page="san_pham"; 
              
        } 
          
    }else{ 
          
        $_page="san_pham"; 
          
    } 
?>

<?php include("../configsever.php");?>
<?php
@session_start();

if (isset($_SESSION['error'])) {
   echo "<script>alert('{$_SESSION['error']}');</script>";
   unset($_SESSION['error']);
}
// if (isset($_SESSION['xoagiohang']) && is_array($_SESSION['xoagiohang']))
if(isset($_GET['xoagiohang']))
 {
   if (isset($_GET['xoagiohang'])) {
      $id = $_GET['xoagiohang'];
      for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
         if ($_SESSION['giohang'][$i]['id'] == $id) {
          
            unset($_SESSION['giohang'][$i]['id']);
         }
      }
    
   }

   header("Location: ../session.php");
   unset($_SESSION['id']);
 }
?>