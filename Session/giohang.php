<?php

include("configsever.php");?>
<?php

@session_start();
if (isset($_SESSION['error'])) {
   echo "<script>alert('{$_SESSION['error']}');</script>";
   unset($_SESSION['error']);
}
if (isset($_SESSION['giamgiohang']) && is_array($_SESSION['giamgiohang']))
 {
   if (isset($_GET['giamgiohang'])) {
      $id = $_GET['giamgiohang'];
      for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
         if ($_SESSION['giohang'][$i]['id'] == $id) {
            $_SESSION['giohang'][$i]['soluong'] = $_SESSION['giohang'][$i]['soluong'] - 1;
         }
      }
      header("Location: session.php");
      unset($_SESSION['id']);
   }
   if (isset($_GET['conggiohang'])) 
   {
      $id = $_GET['conggiohang'];
      for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
         if ($_SESSION['giohang'][$i]['id'] == $id) {
            $_SESSION['giohang'][$i]['soluong'] = $_SESSION['giohang'][$i]['soluong'] + 1;
         }
      }
      header("Location: session.php");
   }
}

if (isset($_GET['themgiohang'])) 
{
   $id = $_GET['themgiohang'];
   if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
      $count = count($_SESSION['giohang']);
      $flag = false;
      for ($i = 0; $i < $count; $i++) {
         if ($_SESSION['giohang'][$i]["id"] == $id) {
            $_SESSION['giohang'][$i]["soluong"] += 1;
            $flag = true;
            break;
         }
      }
      if ($flag == false) {
         $_SESSION['giohang'][$count]["id"] = $id;
         $_SESSION['giohang'][$count]["soluong"] = 1;
      }
   } else {
      $_SESSION['giohang'] = array();
      $_SESSION['giohang'][0]["id"] = $id;
      $_SESSION['giohang'][0]["soluong"] = 1;
   }
   header("Location: product.php");
  
}


?> 